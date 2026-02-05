/* ============================================
   PRESIDENT GOLF CLUB - JavaScript Principal
   Fichier unifie et optimise
   ============================================ */

// Donnees des espaces dynamiques
const espacesData = [
    {
        id: "restau",
        title: "Restaurant Cora",
        category: "Restaurant",
        description: "Cuisine raffinee avec vue panoramique sur le parcours de golf",
        image: "images/Nos_espaces/restau.png",
        link: "restaurant.html?section=debutpage"
    },
    {
        id: "bar",
        title: "Bar Green 19",
        category: "Bar & Lounge",
        description: "Lieu de rencontre convivial apres une partie de golf",
        image: "images/Nos_espaces/fresh-cocktails.jpg",
        link: "detail.html?section=bar"
    },
    {
        id: "salle-poly",
        title: "Salle Polyvalente",
        category: "Evenements",
        description: "Espace modulable pour tous vos evenements et receptions",
        image: "images/Nos_espaces/salle_poly.jpg",
        link: "detail.html?section=salle-poly"
    },
    {
        id: "salle-reunion",
        title: "Salle de Reunion",
        category: "Business",
        description: "Cadre professionnel pour vos reunions d'affaires",
        image: "images/Nos_espaces/salle-reunion.jpg",
        link: "detail.html?section=salle-reunion"
    },
    {
        id: "piscine",
        title: "Piscine Panoramique",
        category: "Loisirs",
        description: "Piscine avec vue exceptionnelle sur le parcours",
        image: "images/Nos_espaces/refresh_pool.jpg",
        link: "detail.html?section=piscine"
    },
    {
        id: "golf",
        title: "Parcours de Golf",
        category: "Sport",
        description: "L'un des plus beaux parcours d'Afrique",
        image: "images/Nos_espaces/golf-course-landscape.jpg",
        link: "detail.html?section=golf"
    },
    {
        id: "fitness",
        title: "Centre de Fitness",
        category: "Sport & Sante",
        description: "Salle de remise en forme et musculation moderne",
        image: "images/Nos_espaces/equipment.jpg",
        link: "detail.html?section=fitness"
    }
];

// Variable globale Swiper
let swiper = null;

// ============================================
// INITIALISATION SWIPER
// ============================================
function initSwiper() {
    swiper = new Swiper('.mySwiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        },
    });
}

// ============================================
// GENERER LES SLIDES DES ESPACES
// ============================================
function generateEspacesSlides() {
    const wrapper = document.getElementById('espaces-swiper-wrapper');
    if (!wrapper) return;

    wrapper.innerHTML = '';

    espacesData.forEach(espace => {
        const slide = document.createElement('div');
        slide.className = 'swiper-slide';
        slide.innerHTML = `
            <div class="space-card">
                <div class="space-image">
                    <img src="${espace.image}" alt="${espace.title}" loading="lazy">
                </div>
                <div class="space-content">
                    <span class="space-category">${espace.category}</span>
                    <h3 class="space-title">${espace.title}</h3>
                    <p class="space-description">${espace.description}</p>
                    <a href="${espace.link}" class="space-btn">
                        Voir details <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        `;
        wrapper.appendChild(slide);
    });

    // Reinitialiser le Swiper si besoin
    if (swiper) {
        swiper.destroy();
    }
    initSwiper();
}

// ============================================
// ANIMATION SCROLL REVEAL
// ============================================
function revealOnScroll() {
    const reveals = document.querySelectorAll('.reveal');
    reveals.forEach(el => {
        const windowHeight = window.innerHeight;
        const elementTop = el.getBoundingClientRect().top;
        if (elementTop < windowHeight - 100) {
            el.classList.add('active');
        }
    });
}

// ============================================
// LIGHTBOX / MODAL IMAGES
// ============================================
function openLightbox(imageSrc) {
    const modalEl = document.getElementById('imageModal');
    if (!modalEl) return;

    const modal = new bootstrap.Modal(modalEl);
    document.getElementById('modalImage').src = imageSrc;
    modal.show();
}

// ============================================
// BOUTON RETOUR EN HAUT
// ============================================
function initBackToTop() {
    const backToTop = document.getElementById("backToTop");
    if (!backToTop) return;

    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            backToTop.classList.add("show");
        } else {
            backToTop.classList.remove("show");
        }
    });

    backToTop.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
}

// ============================================
// SMOOTH SCROLL POUR LES ANCRES
// ============================================
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId !== '#') {
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
}

// ============================================
// NAVBAR SCROLL EFFECT
// ============================================
function initNavbarScroll() {
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (!navbar) return;

        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
}

// ============================================
// INITIALISATION GENERALE
// ============================================
document.addEventListener('DOMContentLoaded', () => {
    // Generer les slides des espaces
    generateEspacesSlides();

    // Initialiser les animations
    revealOnScroll();
    window.addEventListener('scroll', revealOnScroll);

    // Smooth scroll
    initSmoothScroll();

    // Bouton retour en haut
    initBackToTop();

    // Navbar scroll effect
    initNavbarScroll();
});

// Reinitialiser le Swiper au redimensionnement
window.addEventListener('resize', () => {
    if (swiper) {
        swiper.destroy();
        initSwiper();
    }
});

const wrapper = document.getElementById('mediaWrapper');
const slides = document.querySelectorAll('.media-slide');
let currentIndex = 0;

function goToSlide(index) {
  currentIndex = Math.max(0, Math.min(index, slides.length - 1));
  wrapper.scrollTo({
    left: wrapper.clientWidth * currentIndex,
    behavior: 'smooth'
  });
}

document.querySelector('.media-next').addEventListener('click', () => {
  goToSlide(currentIndex + 1);
});

document.querySelector('.media-prev').addEventListener('click', () => {
  goToSlide(currentIndex - 1);
});

/* Auto play vidéo quand visible */
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    const video = entry.target.querySelector('video');
    if (!video) return;
    entry.isIntersecting ? video.play() : video.pause();
  });
}, { threshold: 0.6 });

slides.forEach(slide => observer.observe(slide));

/* Swipe mobile */
let startX = 0;
wrapper.addEventListener('touchstart', e => {
  startX = e.touches[0].clientX;
});

wrapper.addEventListener('touchend', e => {
  const endX = e.changedTouches[0].clientX;
  const diff = startX - endX;
  if (Math.abs(diff) > 50) {
    diff > 0 ? goToSlide(currentIndex + 1) : goToSlide(currentIndex - 1);
  }
});

document.getElementById("reservationFormModal").addEventListener("submit", function(e) {
    e.preventDefault();

    const form = this;
    const messageBox = document.getElementById("reservationMessage");
    const submitBtn = form.querySelector("button");

    // UX: état envoi
    submitBtn.disabled = true;
    submitBtn.innerText = "Envoi en cours...";

    fetch(form.action, {
        method: "POST",
        body: new FormData(form)
    })
    .then(response => response.json())
    .then(data => {

        messageBox.innerHTML = data.message;
        messageBox.className = data.success
            ? "alert alert-success mt-3"
            : "alert alert-danger mt-3";

        if (data.success) {
            form.reset();

            // ⏱ Fermer le modal après 2 secondes
            setTimeout(() => {
                const modal = bootstrap.Modal.getInstance(
                    document.getElementById("reservationModal")
                );
                modal.hide();
                messageBox.innerHTML = "";
            }, 2000);
        }
    })
    .catch(() => {
        messageBox.innerHTML = "Erreur de connexion au serveur.";
        messageBox.className = "alert alert-danger mt-3";
    })
    .finally(() => {
        submitBtn.disabled = false;
        submitBtn.innerText = "Envoyer la réservation";
    });
});


const form = document.getElementById('formReservation');

form.addEventListener('submit', function(e) {
    e.preventDefault();

    const submitBtn = form.querySelector('button[type="submit"]');
    submitBtn.disabled = true; // bloque le bouton

    const formData = new FormData(form);

    fetch('reserver.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if(data.status === 'success'){
            // Message vert Bootstrap
            const alertDiv = document.createElement('div');
            alertDiv.className = 'alert alert-success';
            alertDiv.textContent = data.message;
            form.prepend(alertDiv);

            // Vider le formulaire
            form.reset();

            // Fermer la modal après 2s
            setTimeout(() => {
                const modal = bootstrap.Modal.getInstance(document.getElementById('modalReservation'));
                modal.hide();
                alertDiv.remove();
            }, 2000);
        } else {
            alert(data.message);
        }
    })
    .catch(error => console.error('Erreur:', error))
    .finally(() => submitBtn.disabled = false);
});