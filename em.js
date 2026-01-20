const slides = [
  {
      id: 1,
      detailPage: "detail.php?section=restau",
      title: "Restaurant Cora",
      description: "Cuisine raffinée avec vue panoramique sur le parcours de golf",
      image: "images/5.jpg",
      category: "Restaurant",
      color: "#2c5aa0"
  },
  {
      id: 2,
      detailPage: "detail.php?section=bar",
      title: "Bar Green 19",
      description: "Lieu de rencontre convivial après une partie de golf",
      image: "images/Nos_espaces/b1.jpg",
      category: "Bar",
      color: "#3a6bc5"
  },
  {
      id: 3,
      detailPage: "detail.php?section=salle-poly",
      title: "Salle Polyvalente",
      description: "Espace modulable pour tous vos événements et réceptions",
      image: "images/Nos_espaces/Sp2.jpg",
      category: "Salle Polyvalente",
      color: "#4CAF50"
  },
  {
      id: 4,
      detailPage: "detail.php?section=salle-reunion",
      title: "Salle de Réunion",
      description: "Cadre professionnel pour vos réunions d'affaires",
      image: "images/Nos_espaces/Salle_R.jpg",
      category: "Salle de Réunion",
      color: "#FF9800"
  },
  {
      id: 5,
      detailPage: "detail.php?section=piscine",
      title: "Piscine Panoramique",
      description: "Piscine avec vue exceptionnelle sur le parcours",
      image: "images/pisc1.jpg",
      category: "Piscine",
      color: "#00BCD4"
  },
  {
      id: 6,
      detailPage: "detail.php?section=golf",
      title: "Parcours de Golf",
      description: "L'un des plus beaux parcours d'Afrique",
      image: "images/visit_golf.jpg",
      category: "Golf",
      color: "#8BC34A"
  },
  {
      id: 7,
      detailPage: "detail.php?section=fitness",
      title: "Centre de Fitness",
      description: "Salle de remise en forme et musculation moderne",
      image: "images/fitness.jpg",
      category: "Fitness",
      color: "#E91E63"
  }
];

// ========================================
// SLIDER CLASS
// ========================================
class Slider {
  constructor() {
      this.currentIndex = 0;
      this.track = document.getElementById('sliderTrack');
      this.dotsContainer = document.getElementById('sliderDots');
      this.prevBtn = document.getElementById('prevBtn');
      this.nextBtn = document.getElementById('nextBtn');
      
      if (this.track) {
          this.init();
      }
  }

  init() {
      this.renderSlides();
      this.renderDots();
      this.bindEvents();
      this.updateSlider();
  }

  renderSlides() {
      this.track.innerHTML = slides.map((slide, index) => `
          <div class="slide ${index === this.currentIndex ? 'active' : ''}" data-index="${index}">
              <div class="slide-inner" data-detail-page="${slide.detailPage}">
                  <div class="slide-image" style="border-color: ${slide.color}">
                      <img src="${slide.image}" alt="${slide.title}" loading="lazy">
                      <div class="slide-overlay"></div>
                  </div>
                  <div class="slide-content">
                      <span class="slide-category" style="background: ${slide.color}">${slide.category}</span>
                      <h3 class="slide-title">${slide.title}</h3>
                      <p class="slide-description">${slide.description}</p>
                      <button class="slide-btn" style="background: ${slide.color}" data-detail-page="${slide.detailPage}">
                          Voir détails
                          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                              <polyline points="9 18 15 12 9 6"></polyline>
                          </svg>
                      </button>
                  </div>
                  <div class="slide-glow" style="background: linear-gradient(135deg, ${slide.color}00 0%, ${slide.color}33 100%)"></div>
              </div>
          </div>
      `).join('');
  }

  renderDots() {
      if (this.dotsContainer) {
          this.dotsContainer.innerHTML = slides.map((_, index) => `
              <button class="slider-dot ${index === this.currentIndex ? 'active' : ''}" 
                      data-index="${index}" 
                      aria-label="Aller au slide ${index + 1}">
              </button>
          `).join('');
      }
  }

  bindEvents() {
      // Arrows
      if (this.prevBtn) this.prevBtn.addEventListener('click', () => this.prev());
      if (this.nextBtn) this.nextBtn.addEventListener('click', () => this.next());

      // Dots
      if (this.dotsContainer) {
          this.dotsContainer.addEventListener('click', (e) => {
              if (e.target.classList.contains('slider-dot')) {
                  this.goTo(parseInt(e.target.dataset.index));
              }
          });
      }

      // Slide click pour ouvrir la page de détail
      if (this.track) {
          this.track.addEventListener('click', (e) => {
              const slideInner = e.target.closest('.slide-inner');
              const slideBtn = e.target.closest('.slide-btn');
              
              if (slideInner || slideBtn) {
                  const detailPage = slideInner ? slideInner.dataset.detailPage : slideBtn.dataset.detailPage;
                  if (detailPage) {
                      window.location.href = detailPage;
                  }
              }
          });
      }

      // Keyboard navigation
      document.addEventListener('keydown', (e) => {
          if (e.key === 'ArrowLeft') this.prev();
          if (e.key === 'ArrowRight') this.next();
      });

      // Touch/Swipe support
      if (this.track) {
          let touchStartX = 0;
          let touchEndX = 0;

          this.track.addEventListener('touchstart', (e) => {
              touchStartX = e.changedTouches[0].screenX;
          }, { passive: true });

          this.track.addEventListener('touchend', (e) => {
              touchEndX = e.changedTouches[4].screenX;
              this.handleSwipe(touchStartX, touchEndX);
          }, { passive: true });
      }
  }

  handleSwipe(startX, endX) {
      const threshold = 50;
      const diff = startX - endX;

      if (Math.abs(diff) > threshold) {
          if (diff > 0) {
              this.next();
          } else {
              this.prev();
          }
      }
  }

  prev() {
      this.goTo(this.currentIndex - 1);
  }

  next() {
      this.goTo(this.currentIndex + 1);
  }

  goTo(index) {
      // Loop behavior
      if (index < 0) {
          index = slides.length - 1;
      } else if (index >= slides.length) {
          index = 0;
      }

      this.currentIndex = index;
      this.updateSlider();
  }

  updateSlider() {
      // Update slides
      const slideElements = this.track.querySelectorAll('.slide');
      slideElements.forEach((slide, index) => {
          slide.classList.toggle('active', index === this.currentIndex);
      });

      // Update dots
      const dotElements = this.dotsContainer.querySelectorAll('.slider-dot');
      dotElements.forEach((dot, index) => {
          dot.classList.toggle('active', index === this.currentIndex);
      });

      // Calculate and apply transform
      if (slideElements.length > 0) {
          const slideWidth = slideElements[0].offsetWidth;
          const containerWidth = this.track.parentElement.offsetWidth;
          const offset = (containerWidth - slideWidth) / 2;
          const translateX = -(this.currentIndex * (slideWidth + 16)) + offset;

          this.track.style.transform = `translateX(${translateX}px)`;
          this.track.style.transition = 'transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
      }
  }
}

// ========================================
// NAVIGATION (Menu déroulant "Nos Espaces")
// ========================================
function initNavigation() {
  const navLinks = document.querySelectorAll('.nav-item.nav-hover a[href="#espaces"]');
  
  navLinks.forEach(navLink => {
      const parentLi = navLink.parentElement;
      const dropdown = parentLi.querySelector('.dropdown-menu-custom');
      
      if (dropdown) {
          // Remplir le dropdown avec les liens vers les pages de détail
          dropdown.innerHTML = slides.map(slide => `
              <li><a href="${slide.detailPage}" class="nav-section-link">${slide.title}</a></li>
          `).join('');
      }
  });
}

// ========================================
// PAGE DE DÉTAIL (detail.html)
// ========================================
function initDetailPage() {
  // Vérifier si nous sommes sur la page de détail
  if (window.location.pathname.includes('detail.html')) {
      // Récupérer le paramètre de section depuis l'URL
      const urlParams = new URLSearchParams(window.location.search);
      const section = urlParams.get('section');
      
      if (section) {
          // Charger la section correspondante
          loadSectionContent(section);
          
          // Mettre à jour le titre de la page
          const slide = slides.find(s => s.detailPage.includes(`section=${section}`));
          if (slide) {
              document.title = `${slide.title} - Président Golf Club`;
          }
      }
  }
}

function loadSectionContent(sectionId) {
  // Masquer toutes les sections d'abord
  const allSections = document.querySelectorAll('section[id]');
  allSections.forEach(section => {
      section.style.display = 'none';
  });
  
  // Afficher la section correspondante
  const targetSection = document.getElementById(sectionId);
  if (targetSection) {
      targetSection.style.display = 'block';
      
      // Scroll vers la section
      setTimeout(() => {
          targetSection.scrollIntoView({ 
              behavior: 'smooth',
              block: 'start'
          });
      }, 100);
  }
}

// ========================================
// INITIALISATION
// ========================================
document.addEventListener('DOMContentLoaded', () => {
  // Initialiser le slider si on est sur la page principale
  if (document.getElementById('sliderTrack')) {
      new Slider();
      initNavigation();
  }
  
  // Initialiser la page de détail si nécessaire
  initDetailPage();
});