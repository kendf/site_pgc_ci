/**
 * Golf Club - Module API
 * Configuration centralisée pour les appels au backend
 */

// ===== CONFIGURATION =====
// Remplacez cette URL par celle de votre backend Render une fois déployé
// Exemple : const API_BASE_URL = 'https://votre-api.onrender.com/api';
const API_BASE_URL = window.API_BASE_URL || 'https://golf-club-backend.onrender.com/api';

// Token stocké après connexion
function getToken() {
  return localStorage.getItem('access_token') || sessionStorage.getItem('access_token');
}

function parseJwt(token) {
  try {
    const base64Url = token.split('.')[1];
    if (!base64Url) return null;
    const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
    const jsonPayload = decodeURIComponent(
      atob(base64)
        .split('')
        .map(c => '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2))
        .join('')
    );
    return JSON.parse(jsonPayload);
  } catch (e) {
    return null;
  }
}

function isTokenExpired(token) {
  const payload = parseJwt(token);
  if (!payload || !payload.exp) return true;
  const now = Math.floor(Date.now() / 1000);
  return payload.exp <= now;
}

function setToken(token, options = {}) {
  const remember = options.remember !== false;
  if (remember) {
    localStorage.setItem('access_token', token);
    sessionStorage.removeItem('access_token');
  } else {
    sessionStorage.setItem('access_token', token);
    localStorage.removeItem('access_token');
  }
}

function removeToken() {
  localStorage.removeItem('access_token');
  sessionStorage.removeItem('access_token');
  removeUser();
}

function isAuthenticated() {
  const token = getToken();
  if (!token) return false;
  if (isTokenExpired(token)) {
    removeToken();
    return false;
  }
  return true;
}

// ===== GESTION DES RÔLES =====

/**
 * Récupère l'objet utilisateur depuis le localStorage
 */
function getUser() {
  try {
    const raw = localStorage.getItem('user') || sessionStorage.getItem('user');
    return raw ? JSON.parse(raw) : null;
  } catch {
    return null;
  }
}

function setUser(user, options = {}) {
  const remember = options.remember !== false;
  const value = JSON.stringify(user);
  if (remember) {
    localStorage.setItem('user', value);
    sessionStorage.removeItem('user');
  } else {
    sessionStorage.setItem('user', value);
    localStorage.removeItem('user');
  }
}

function removeUser() {
  localStorage.removeItem('user');
  sessionStorage.removeItem('user');
}

/**
 * Récupère le rôle de l'utilisateur connecté
 */
function getUserRole() {
  const user = getUser();
  return user ? (user.role || user.type || 'client') : null;
}

/**
 * Déconnexion : supprime token et données utilisateur
 */
function logout() {
  removeToken();
  removeUser();
  window.location.href = 'login.html';
}

/**
 * Vérifie l'authentification, redirige vers login si non connecté
 */
function requireAuth() {
  if (!isAuthenticated()) {
    window.location.href = 'login.html';
    return false;
  }
  return true;
}

/**
 * Vérifie que l'utilisateur a un des rôles autorisés
 * @param {string[]} allowedRoles - Liste des rôles autorisés
 * @param {string} redirectUrl - URL de redirection si non autorisé (défaut: 'login.html')
 */
function requireRole(allowedRoles, redirectUrl) {
  if (!requireAuth()) return false;

  const role = getUserRole();
  if (!role || !allowedRoles.includes(role)) {
    // Rediriger selon le rôle actuel ou vers login
    if (redirectUrl) {
      window.location.href = redirectUrl;
    } else if (role === 'client') {
      window.location.href = 'client.html';
    } else {
      logout();
    }
    return false;
  }
  return true;
}

/**
 * Requête API générique
 */
async function apiRequest(endpoint, options = {}) {
  const url = `${API_BASE_URL}${endpoint}`;
  const headers = {
    'Content-Type': 'application/json',
    ...options.headers,
  };

  const token = getToken();
  if (token) {
    headers['Authorization'] = `Bearer ${token}`;
  }

  try {
    const response = await fetch(url, {
      ...options,
      headers,
      cache: 'no-store',
    });

    if (response.status === 304) return null;

    let data = null;
    const contentType = response.headers.get('content-type') || '';
    if (response.status !== 204 && response.status !== 205) {
      if (contentType.includes('application/json')) {
        const text = await response.text();
        data = text ? JSON.parse(text) : null;
      } else {
        data = await response.text();
      }
    }

    if (!response.ok) {
      throw {
        status: response.status,
        message: data?.message || data?.error || (typeof data === 'string' && data) || 'Erreur serveur',
        code: data?.code || 'UNKNOWN_ERROR',
      };
    }

    return data;
  } catch (error) {
    if (error.status === 401) {
      removeToken();
      window.location.href = 'login.html';
    }
    throw error;
  }
}

// ==================== SERVICES ====================

const ServicesAPI = {
  list: () => apiRequest('/services'),
  get: (code) => apiRequest(`/services/${code}`),
};

// ==================== GOLF ====================

const GolfAPI = {
  disponibilites: (params = '') => apiRequest(`/golf/disponibilites${params ? '?' + params : ''}`),
  tarifs: () => apiRequest('/golf/tarifs'),
  reserver: (data) => apiRequest('/golf/reserver', { method: 'POST', body: JSON.stringify(data) }),

  // Jeu de golf
  classement: (limit = 20) => apiRequest(`/golf/classement?limit=${limit}`),
  mesParties: (page = 1) => apiRequest(`/golf/parties?page=${page}`),
  getPartie: (id) => apiRequest(`/golf/parties/${id}`),
  enregistrerScore: (data) => apiRequest('/golf/parties', { method: 'POST', body: JSON.stringify(data) }),
  supprimerPartie: (id) => apiRequest(`/golf/parties/${id}`, { method: 'DELETE' }),
  mesStats: () => apiRequest('/golf/stats'),
};

// ==================== RESTAURANT ====================

const RestaurantAPI = {
  disponibilites: (params = '') => apiRequest(`/restaurant/disponibilites${params ? '?' + params : ''}`),
  menus: (category = '') => apiRequest(`/restaurant/menus${category ? '?category=' + category : ''}`),
  reserver: (data) => apiRequest('/restaurant/reserver', { method: 'POST', body: JSON.stringify(data) }),
  createMenu: (data) => apiRequest('/restaurant/menus', { method: 'POST', body: JSON.stringify(data) }),
  updateMenu: (id, data) => apiRequest(`/restaurant/menus/${id}`, { method: 'PATCH', body: JSON.stringify(data) }),
  deleteMenu: (id) => apiRequest(`/restaurant/menus/${id}`, { method: 'DELETE' }),
};

// ==================== SALLES ====================

const SallesAPI = {
  list: () => apiRequest('/salles'),
  get: (id) => apiRequest(`/salles/${id}`),
  disponibilites: (id, start, end) => apiRequest(`/salles/${id}/disponibilites?start_date=${start}&end_date=${end}`),
  create: (data) => apiRequest('/salles', { method: 'POST', body: JSON.stringify(data) }),
  update: (id, data) => apiRequest(`/salles/${id}`, { method: 'PATCH', body: JSON.stringify(data) }),
  delete: (id) => apiRequest(`/salles/${id}`, { method: 'DELETE' }),
};

// ==================== RESERVATIONS ====================

const ReservationsAPI = {
  create: (data) => apiRequest('/reservations', { method: 'POST', body: JSON.stringify(data) }),
  mesReservations: () => apiRequest('/reservations/mes-reservations'),
  get: (id) => apiRequest(`/reservations/${id}`),
  annuler: (id) => apiRequest(`/reservations/${id}/annuler`, { method: 'PATCH' }),
  confirmation: (id) => apiRequest(`/reservations/${id}/confirmation`),
  // Admin
  list: (params = '') => apiRequest(`/reservations${params ? '?' + params : ''}`),
  confirmer: (id) => apiRequest(`/reservations/${id}/confirmer`, { method: 'PATCH' }),
  refuser: (id, note) => apiRequest(`/reservations/${id}/refuser`, { method: 'PATCH', body: JSON.stringify({ staff_note: note }) }),
  terminer: (id) => apiRequest(`/reservations/${id}/terminer`, { method: 'PATCH' }),
  export: () => apiRequest('/reservations/export'),
};

// ==================== CRENEAUX ====================

const CreneauxAPI = {
  disponibles: (params = '') => apiRequest(`/creneaux/disponibles${params ? '?' + params : ''}`),
  calendar: () => apiRequest('/creneaux/calendar'),
  generer: (data) => apiRequest('/creneaux/generer', { method: 'POST', body: JSON.stringify(data) }),
  create: (data) => apiRequest('/creneaux', { method: 'POST', body: JSON.stringify(data) }),
  update: (id, data) => apiRequest(`/creneaux/${id}`, { method: 'PATCH', body: JSON.stringify(data) }),
  delete: (id) => apiRequest(`/creneaux/${id}`, { method: 'DELETE' }),
};

// ==================== CLIENTS ====================

const ClientsAPI = {
  get: (id) => apiRequest(`/clients/${id}`),
  update: (id, data) => apiRequest(`/clients/${id}`, { method: 'PATCH', body: JSON.stringify(data) }),
  reservations: (id) => apiRequest(`/clients/${id}/reservations`),
  // Admin
  list: () => apiRequest('/clients'),
  delete: (id) => apiRequest(`/clients/${id}`, { method: 'DELETE' }),
};

// ==================== ADMIN ====================

const AdminAPI = {
  dashboard: () => apiRequest('/admin/dashboard'),
  statsReservations: (params = '') => apiRequest(`/admin/stats/reservations${params ? '?' + params : ''}`),
  statsRevenus: (params = '') => apiRequest(`/admin/stats/revenus${params ? '?' + params : ''}`),
  exportStats: () => apiRequest('/admin/stats/export'),
  utilisateurs: () => apiRequest('/admin/utilisateurs'),
  createUser: (data) => apiRequest('/admin/utilisateurs', { method: 'POST', body: JSON.stringify(data) }),
};

// ==================== PAIEMENTS ====================

const PaiementsAPI = {
  status: () => apiRequest('/paiements/status'),
  mesPaiements: () => apiRequest('/paiements/mes-paiements'),
  get: (id) => apiRequest(`/paiements/${id}`),
  create: (data) => apiRequest('/paiements', { method: 'POST', body: JSON.stringify(data) }),
  list: (params = '') => apiRequest(`/paiements${params ? '?' + params : ''}`),
  uploadRecu: (id, formData) => {
    const url = `${API_BASE_URL}/paiements/${id}/recu`;
    const headers = {};
    const token = getToken();
    if (token) headers['Authorization'] = `Bearer ${token}`;
    return fetch(url, { method: 'POST', headers, body: formData }).then(async r => {
      const data = await r.json();
      if (!r.ok) throw { status: r.status, message: data.message || 'Erreur serveur' };
      return data;
    });
  },
  verifier: (id) => apiRequest(`/paiements/${id}/verifier`, { method: 'PATCH' }),
  rembourser: (id) => apiRequest(`/paiements/${id}/rembourser`, { method: 'PATCH' }),
  approuverRemboursement: (id) => apiRequest(`/paiements/${id}/approuver-remboursement`, { method: 'PATCH' }),
  refuserRemboursement: (id, reason) => apiRequest(`/paiements/${id}/refuser-remboursement`, { method: 'PATCH', body: JSON.stringify({ reason }) }),
};

// ==================== UTILS ====================

function formatDate(dateStr) {
  const d = new Date(dateStr);
  return d.toLocaleDateString('fr-FR', {
    weekday: 'long',
    year: 'numeric',
    month: 'long',
    day: 'numeric',
  });
}

function formatTime(dateStr) {
  const d = new Date(dateStr);
  return d.toLocaleTimeString('fr-FR', { hour: '2-digit', minute: '2-digit' });
}

function formatPrice(price) {
  return new Intl.NumberFormat('fr-FR', { style: 'decimal', minimumFractionDigits: 0 }).format(price) + ' FCFA';
}

function formatStatus(status) {
  const map = {
    en_attente: '<span class="badge bg-warning text-dark">En attente</span>',
    confirmee: '<span class="badge bg-success">Confirmée</span>',
    annulee: '<span class="badge bg-secondary">Annulée</span>',
    refusee: '<span class="badge bg-danger">Refusée</span>',
    terminee: '<span class="badge bg-info">Terminée</span>',
  };
  return map[status] || `<span class="badge bg-light text-dark">${status}</span>`;
}

function showAlert(container, message, type = 'danger') {
  const alertDiv = document.createElement('div');
  alertDiv.className = `alert alert-${type} alert-dismissible fade show`;
  alertDiv.innerHTML = `${message}<button type="button" class="btn-close" data-bs-dismiss="alert"></button>`;
  container.prepend(alertDiv);
  setTimeout(() => alertDiv.remove(), 5000);
}

function showLoading(element) {
  element.innerHTML = '<div class="text-center py-4"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Chargement...</span></div></div>';
}
