    // Données des espaces dynamiques
    const espacesData = [
        {
            id: "restau",
            title: "Restaurant Cora",
            category: "Restaurant",
            description: "Cuisine raffinée avec vue panoramique sur le parcours de golf",
            image: "images/Nos_espaces/restau.png",
            link: "detail.php?section=restau"
        },
        {
            id: "bar",
            title: "Bar Green 19",
            category: "Bar & Lounge",
            description: "Lieu de rencontre convivial après une partie de golf",
            image: "images/Nos_espaces/fresh-cocktails.jpg",
            link: "detail.php?section=bar"
        },
        {
            id: "salle-poly",
            title: "Salle Polyvalente",
            category: "Événements",
            description: "Espace modulable pour tous vos événements et réceptions",
            image: "images/Nos_espaces/salle_poly.jpg",
            link: "detail.php?section=salle-poly"
        },
        {
            id: "salle-reunion",
            title: "Salle de Réunion",
            category: "Business",
            description: "Cadre professionnel pour vos réunions d'affaires",
            image: "images/Nos_espaces/salle-reunion.jpg",
            link: "detail.php?section=salle-reunion"
        },
        {
            id: "piscine",
            title: "Piscine Panoramique",
            category: "Loisirs",
            description: "Piscine avec vue exceptionnelle sur le parcours",
            image: "images/Nos_espaces/refresh_pool.jpg",
            link: "detail.php?section=piscine"
        },
        {
            id: "golf",
            title: "Parcours de Golf",
            category: "Sport",
            description: "L'un des plus beaux parcours d'Afrique",
            image: "images/Nos_espaces/golf-course-landscape.jpg",
            link: "detail.php?section=golf"
        },
        {
            id: "fitness",
            title: "Centre de Fitness",
            category: "Sport & Santé",
            description: "Salle de remise en forme et musculation moderne",
            image: "images/Nos_espaces/equipment.jpg",
            link: "detail.php?section=fitness"
        }
    ];

    // Initialisation du Swiper
    let swiper = null;

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

    // Générer les slides
    function generateEspacesSlides() {
        const wrapper = document.getElementById('espaces-swiper-wrapper');
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
                            Voir détails <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            `;
            wrapper.appendChild(slide);
        });

        // Réinitialiser le Swiper si besoin
        if (swiper) {
            swiper.destroy();
        }
        initSwiper();
    }

    // Scroll reveal animation
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

    // Lightbox function
    function openLightbox(imageSrc) {
        const modal = new bootstrap.Modal(document.getElementById('imageModal'));
        document.getElementById('modalImage').src = imageSrc;
        modal.show();
    }

    // Initialisation au chargement
    document.addEventListener('DOMContentLoaded', () => {
        // Générer les slides des espaces
        generateEspacesSlides();
        
        // Initialiser les animations
        revealOnScroll();
        window.addEventListener('scroll', revealOnScroll);
        
        // Smooth scroll pour les ancres
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
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
    });

    // Réinitialiser le Swiper au redimensionnement
    window.addEventListener('resize', () => {
        if (swiper) {
            swiper.destroy();
            initSwiper();
        }
    });
    // Animation texte flash (si besoin)
    document.addEventListener("DOMContentLoaded", function () {
        const text = document.getElementById("flash-info");
        if (text) {
            setTimeout(() => {
                text.classList.add("hide");
                setTimeout(() => {
                    text.style.display = "none";
                }, 1000);
            }, 5000);
        }
    });
             try {
               
                // Mettre à jour le breadcrumb
                breadcrumbEl.textContent = sectionData.title;

                // Masquer le loading
                loadingEl.style.display = 'none';

                // Animation
                setTimeout(() => {
                    const fadeElements = document.querySelectorAll('.fade-in');
                    fadeElements.forEach(el => {
                        el.style.opacity = '0';
                        el.style.animation = 'fadeIn 0.8s ease forwards';
                    });
                }, 100);

            } catch (error) {
                console.error('Erreur:', error);
                loadingEl.innerHTML = `
                    <div style="text-align: center;">
                        <i class="fas fa-exclamation-triangle" style="font-size: 3rem; color: #d32f2f; margin-bottom: 20px;"></i>
                        <h2>Section non trouvée</h2>
                        <p>${error.message}</p>
                        <a href="main_index - Copie.php" class="btn btn-primary" style="margin-top: 20px;">
                            <i class="fas fa-home"></i> Retour à l'accueil
                        </a>
                    </div>
                `;
            }
        
     // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            const scrollTop = document.getElementById('scrollTop');
            
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            
            // Show scroll to top button
            if (window.scrollY > 300) {
                scrollTop.classList.add('visible');
            } else {
                scrollTop.classList.remove('visible');
            }
            
            // Update active nav link
            updateActiveNavLink();
        });

        // Scroll to top
        document.getElementById('scrollTop').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
const track = document.querySelector('.partners-track');
const nextBtn = document.querySelector('.slider-btn.next');
const prevBtn = document.querySelector('.slider-btn.prev');

// Vitesse initiale (pixels par frame)
let speed = 1; // plus grand = plus rapide
let direction = 1; // 1 = gauche → droite, -1 = droite → gauche
let pos = 0;

// Animation
function animate() {
    pos -= speed * direction;
    if (pos <= -track.scrollWidth / 2) pos = 0;
    if (pos >= 0) pos = -track.scrollWidth / 2;
    track.style.transform = `translateX(${pos}px)`;
    requestAnimationFrame(animate);
}
animate();

// Boutons
nextBtn.addEventListener('click', () => direction = 1);
prevBtn.addEventListener('click', () => direction = -1);

// Option vitesse dynamique (exemple)
function setSpeed(newSpeed) {
    speed = newSpeed; // vitesse en px/frame
}
const backToTop = document.getElementById("backToTop");

window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    backToTop.style.display = "block";
  } else {
    backToTop.style.display = "none";
  }
});

backToTop.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});
