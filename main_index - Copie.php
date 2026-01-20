<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Président Golf Club</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

  <!-- Iconscout CDN -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <!-- Pour les polices -->

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans:wght@400&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="feuille_css-js/style-Copie.css">
    <link rel="stylesheet" href="feuille_css-js/em.css">

<style>
  /* ============================================
     LOADER - Écran de chargement moderne
     ============================================ */
  .loader-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #1a472a 0%, #2d5a3d 50%, #1a472a 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 99999;
    transition: opacity 0.5s ease, visibility 0.5s ease;
  }

  .loader-wrapper.fade-out {
    opacity: 0;
    visibility: hidden;
  }

  .loader-content {
    text-align: center;
    color: white;
  }

  /* Logo animé */
  .loader-logo {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    border: 4px solid rgba(255, 255, 255, 0.3);
    padding: 10px;
    margin: 0 auto 30px;
    animation: pulse-logo 2s ease-in-out infinite;
    box-shadow: 0 0 40px rgba(89, 178, 72, 0.5);
  }

  .loader-logo img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
  }

  @keyframes pulse-logo {
    0%, 100% {
      transform: scale(1);
      box-shadow: 0 0 40px rgba(89, 178, 72, 0.5);
    }
    50% {
      transform: scale(1.05);
      box-shadow: 0 0 60px rgba(89, 178, 72, 0.8);
    }
  }

  /* Titre du loader */
  .loader-title {
    font-family: 'Montserrat', sans-serif;
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 10px;
    letter-spacing: 3px;
    text-transform: uppercase;
    background: linear-gradient(90deg, #fff, #59b248, #fff);
    background-size: 200% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: shine-text 3s linear infinite;
  }

  @keyframes shine-text {
    to {
      background-position: 200% center;
    }
  }

  .loader-subtitle {
    font-family: 'Poppins', sans-serif;
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.7);
    margin-bottom: 40px;
    letter-spacing: 2px;
  }

  /* Animation de la balle de golf */
  .golf-ball-container {
    position: relative;
    width: 200px;
    height: 60px;
    margin: 0 auto 30px;
  }

  .golf-ball {
    position: absolute;
    width: 20px;
    height: 20px;
    background: radial-gradient(circle at 30% 30%, #ffffff, #e0e0e0);
    border-radius: 50%;
    top: 20px;
    left: 0;
    animation: ball-roll 2s ease-in-out infinite;
    box-shadow:
      inset -2px -2px 4px rgba(0,0,0,0.2),
      2px 4px 8px rgba(0,0,0,0.3);
  }

  .golf-ball::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background:
      radial-gradient(circle at 25% 25%, transparent 1px, rgba(0,0,0,0.05) 1px, transparent 3px),
      radial-gradient(circle at 75% 25%, transparent 1px, rgba(0,0,0,0.05) 1px, transparent 3px),
      radial-gradient(circle at 50% 50%, transparent 1px, rgba(0,0,0,0.05) 1px, transparent 3px),
      radial-gradient(circle at 25% 75%, transparent 1px, rgba(0,0,0,0.05) 1px, transparent 3px),
      radial-gradient(circle at 75% 75%, transparent 1px, rgba(0,0,0,0.05) 1px, transparent 3px);
  }

  @keyframes ball-roll {
    0% {
      left: 0;
      transform: rotate(0deg);
    }
    50% {
      left: 180px;
      transform: rotate(360deg);
    }
    100% {
      left: 0;
      transform: rotate(720deg);
    }
  }

  /* Ligne du parcours */
  .golf-track {
    position: absolute;
    bottom: 15px;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg,
      transparent,
      rgba(89, 178, 72, 0.5) 20%,
      rgba(89, 178, 72, 0.8) 50%,
      rgba(89, 178, 72, 0.5) 80%,
      transparent
    );
    border-radius: 2px;
  }

  /* Barre de progression */
  .progress-container {
    width: 250px;
    margin: 0 auto;
  }

  .progress-bar-wrapper {
    width: 100%;
    height: 4px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 2px;
    overflow: hidden;
    margin-bottom: 15px;
  }

  .progress-bar-fill {
    height: 100%;
    width: 0%;
    background: linear-gradient(90deg, #59b248, #7ed957, #59b248);
    background-size: 200% 100%;
    border-radius: 2px;
    animation: progress-animation 1.2s ease-out forwards, shimmer 1s linear infinite;
  }

  @keyframes progress-animation {
    0% { width: 0%; }
    20% { width: 20%; }
    40% { width: 45%; }
    60% { width: 70%; }
    80% { width: 85%; }
    100% { width: 100%; }
  }

  @keyframes shimmer {
    0% { background-position: -200% 0; }
    100% { background-position: 200% 0; }
  }

  .progress-text {
    font-family: 'Poppins', sans-serif;
    font-size: 0.85rem;
    color: rgba(255, 255, 255, 0.8);
  }

  /* Points de chargement */
  .loading-dots {
    display: inline-flex;
    gap: 5px;
    margin-left: 5px;
  }

  .loading-dots span {
    width: 6px;
    height: 6px;
    background: #59b248;
    border-radius: 50%;
    animation: dot-bounce 1.4s ease-in-out infinite;
  }

  .loading-dots span:nth-child(1) { animation-delay: 0s; }
  .loading-dots span:nth-child(2) { animation-delay: 0.2s; }
  .loading-dots span:nth-child(3) { animation-delay: 0.4s; }

  @keyframes dot-bounce {
    0%, 80%, 100% {
      transform: scale(0.8);
      opacity: 0.5;
    }
    40% {
      transform: scale(1.2);
      opacity: 1;
    }
  }

  /* Responsive */
  @media (max-width: 576px) {
    .loader-title {
      font-size: 1.3rem;
      letter-spacing: 2px;
    }
    .loader-logo {
      width: 100px;
      height: 100px;
    }
    .golf-ball-container {
      width: 150px;
    }
    @keyframes ball-roll {
      0% { left: 0; transform: rotate(0deg); }
      50% { left: 130px; transform: rotate(360deg); }
      100% { left: 0; transform: rotate(720deg); }
    }
    .progress-container {
      width: 200px;
    }
  }

  /* ============================================
     BOUTON RETOUR EN HAUT
     ============================================ */
  .scroll-to-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #59b248 0%, #3d8c35 100%);
    border: none;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
    transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    box-shadow: 0 4px 15px rgba(89, 178, 72, 0.4);
  }

  .scroll-to-top.visible {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }

  .scroll-to-top:hover {
    background: linear-gradient(135deg, #6bc95a 0%, #59b248 100%);
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(89, 178, 72, 0.5);
  }

  .scroll-to-top:active {
    transform: translateY(-2px);
  }

  /* Flèche animée */
  .scroll-to-top svg {
    width: 24px;
    height: 24px;
    stroke: white;
    stroke-width: 2.5;
    fill: none;
    transition: transform 0.3s ease;
  }

  .scroll-to-top:hover svg {
    animation: arrow-bounce 0.6s ease infinite;
  }

  @keyframes arrow-bounce {
    0%, 100% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-4px);
    }
  }

  /* Effet cercle au survol */
  .scroll-to-top::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 2px solid rgba(89, 178, 72, 0.5);
    transform: scale(1);
    opacity: 0;
    transition: all 0.4s ease;
  }

  .scroll-to-top:hover::before {
    transform: scale(1.3);
    opacity: 1;
    border-color: rgba(89, 178, 72, 0.3);
  }

  /* Responsive */
  @media (max-width: 576px) {
    .scroll-to-top {
      bottom: 20px;
      right: 20px;
      width: 45px;
      height: 45px;
    }
    .scroll-to-top svg {
      width: 20px;
      height: 20px;
    }
  }

  .nav-link:hover{
    background-color:#59b248;
    color:white;
  }
  .dropdown-menu-custom a:hover{
    background-color:#59b248;
    color:white;
  }
  .left  {
    width: 60%;
    padding: 20px;
  }
  
 
  
  .right {
    width: 20%;
    background: #f9f9f9;
    padding: 20px;
  }
  
  .right image {
  width: 70%;        
  max-width: 700px; 
  height: auto;     
  display: block;
  margin: 0 auto;    
  }
  .events{
        background-image: url('images/pic_event/bg.jpg');

  }


</style>
</head>

<body>
<!-- ============================================
     LOADER - Écran de chargement
     ============================================ -->
<div class="loader-wrapper" id="loader">
  <div class="loader-content">
    <!-- Logo animé -->
    <div class="loader-logo">
      <img src="images/logo_pgc.jpeg" alt="PGC Logo">
    </div>

    <!-- Titre -->
    <h1 class="loader-title">Président Golf Club</h1>
    <p class="loader-subtitle">Excellence & Prestige</p>

    <!-- Animation balle de golf -->
    <div class="golf-ball-container">
      <div class="golf-ball"></div>
      <div class="golf-track"></div>
    </div>

    <!-- Barre de progression -->
    <div class="progress-container">
      <div class="progress-bar-wrapper">
        <div class="progress-bar-fill" id="progressBar"></div>
      </div>
      <p class="progress-text">
        Chargement
        <span class="loading-dots">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </p>
    </div>
  </div>
</div>

<header>
<nav class="navbar navbar-expand-lg fixed-top bg-light shadow">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">
        <img src="images/logo_pgc.jpeg" width="80" height="60"
             class="rounded-circle border border-2 border-light">
        Président Golf Club
    </a>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mx-auto">

        <li class="nav-item nav-hover">
          <a class="nav-link" href="#espaces">Nos Espaces</a>
          <ul class="dropdown-menu-custom">
            <li><a href="detail.php?section=restau">Restaurant Cora</a></li>
            <li><a href="detail.php?section=bar">Bar Green 19</a></li>
            <li><a href="#salle-poly">Salle polyvalente</a></li>
            <li><a href="detail.php?section=salle-reunion">Salle de réunion</a></li>
            <li><a href="detail.php?section=golf">Golf</a></li>
            <li><a href="detail.php?section=piscine">Piscine</a></li>
            <li><a href="detail.php?section=fitness">Fitness center</a></li>
            <li><a href="#">Le traiteur du PGC</a></li>
          </ul>
        </li>

        <li class="nav-item nav-hover">
          <a class="nav-link" href="galerie_photo.php">Galerie</a>
        </li>

        <li class="nav-item nav-hover">
          <a class="nav-link" href="#evenement">Événement & Média</a>
          <ul class="dropdown-menu-custom">
            <li><a href="#">Tournois</a></li>
            <li><a href="#">Communiqués</a></li>
            <li><a href="https://news.abidjan.net/titrologie">Presse</a></li>
          </ul>
        </li>

        <li class="nav-item nav-hover">
          <a class="nav-link" href="Apropos_de_nous - Copie.php">À propos de nous</a>
          <ul class="dropdown-menu-custom">
            <li><a href="Apropos_de_nous - Copie.php#histoire">Historique</a></li>
            <li><a href="Apropos_de_nous - Copie.php#mot_dg">Mot du Directeur</a></li>
            <li><a href="Apropos_de_nous - Copie.php#equipe">Équipe dirigeante</a></li>
          </ul>
        </li>

      </ul>
    </div>

  </div>
</nav>
</header>

<div class="page-container">
  <main class="main-content">
<section class="hero">
  <div class="container_i">
    <h1  class="fade-zoom">
     ✨ BIENVENUE <br>AU PRESIDENT GOLF CLUB✨
    </h1>
  </div>
  <div  class="hero_video">
      <video autoplay loop muted playsinline>
      <source src="images/Slide_ACC/herovideo.mp4" type="video/mp4">"></video>
  </div>
</section>
<!-- MENU PAR CARTES -->
<section class="container my-5">
    <div class="row g-4 text-center">
        
        <div class="col-md-4 col-sm-6 reveal">
            <a href="detail.php?section=golf" class="menu-card">
                <div class="icon"><img src="images/icons/birdie.png" alt="golf" width="50" height="50"></div>
                <h5>Parcours de Golf</h5>
            </a>
        </div>

        <div class="col-md-4 col-sm-6 reveal">
            <a href="detail.php?section=restau" class="menu-card">
                <div class="icon"><img src="images/icons/serveur.png" alt="restaurant" width="60" height="60"></div>
                <h5>Restaurant et Loisirs</h5>
            </a>
        </div>

        <div class="col-md-4 col-sm-6 reveal">
            <a href="detail.php?section=piscine" class="menu-card">
                <div class="icon"><img src="images/icons/piscine.png" alt="piscine"  height="70" class="rounded-circle w100 border-light"></div>
                <h5>Piscine</h5>
                <p></p>
            </a>
        </div>
</div>
</section>      
<section class="container my-5">
    <div class="row g-4 text-center">

         <div class="col-md-4 col-sm-6 reveal">
            <a href="detail.php?section=fitness" class="menu-card">
                <div class="icon"><img src="images/icons/exercer.png" alt="fit" width="70" height="60"></div>
                <h5>Fitness Center</h5>
                <p>Garder la forme</p>
            </a>
         </div>

        <div class="col-md-4 col-sm-6 reveal">
            <a href="academie1.php" class="menu-card">
                <div class="icon"><img src="images/academie_log.jpg" alt="academie" width="60" height="60" class="rounded-circle  border-light"></div>

                <h5>Académie</h5>
            </a>
        </div>

        <div class="col-md-4 col-sm-6 reveal">
            <a href="#partners" class="menu-card">
                <div class="icon"><img src="images/icons/partners.png" alt="partners" height="100"></div>
                <h5>Nos Partenaires</h5>
                <p></p>
            </a>
        </div>
</div>
</section>
<!--Les espaces-->
    <!-- Hero Section -->
    <section class="hero-espaces">
      <h1 class="hero-title">Nos espaces</h1>
      <p class="hero-subtitle text-secondary">
          Fonctionnel et adapté a tout vos besoins 
      </p>
  </section>

   <!-- Slider Section -->
 <section class="slider-section" id="slider">
  <div class="slider-container">
      <div class="slider-track" id="sliderTrack">
          <!-- Les slides seront générées par JavaScript --> 
      </div>
  </div>

  <!-- Conteneur pour afficher le contenu des sections -->
<div id="section-content-container" class="section-content-container" style="display: none;">
  <button class="close-section-btn" id="closeSectionBtn" aria-label="Fermer">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
      <line x1="18" y1="6" x2="6" y2="18"></line>
      <line x1="6" y1="6" x2="18" y2="18"></line>
    </svg>
  </button>
  <div id="section-content"></div>
</div>


  <!-- Navigation buttons -->
  <button class="slider-arrow slider-arrow-prev" id="prevBtn" aria-label="Slide précédent">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
      <polyline points="15,18 9,12 15,6"></polyline>
    </svg>
  </button>
  <button class="slider-arrow slider-arrow-next" id="nextBtn" aria-label="Slide suivant">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
      <polyline points="9,6 15,12 9,18"></polyline>
    </svg>
  </button>

  <div class="slider-dots" id="sliderDots"></div>
  <p class="slider-hint">← Glissez pour naviguer • Cliquez sur une slide pour voir les détails →</p>
</section>
                                                                                        
<section id="evenement" class="events">
  
    <div class="events-header reveal">
        <h2>Événements à Venir</h2>
        <p>Rejoignez-nous pour des moments inoubables</p>
    </div>

    <div class="event-card reveal">
      <div class="left">
        <div class="event-icon">📅</div>
        <div class="event-content">
            <h3>Swing de l'arrivé</h3>
            <span class="event-date">24/01/2025</span>
            <p>Ceremonie de lancement de l'année 2026</p>
        </div>
      </div class="right">
          <!--img src="images/pic_event/swiming.png" alt="event" "-->
              <img src="images/pic_event/swiming.png" class=" img-preview w-100" id="openImage">

            <div class="image-modal w-100" id="imageModal">
              <span class="close" id="closeBtn">&times;</span>
              <img id="modalImage">
            </div>
      <div>

      </div>
    </div>

    <div class="event-card reveal">
      <div class="left">
        <div class="event-icon">📅</div>
        <div class="event-content">
            <h3>Green Days</h3>
            <span class="event-date">Chaque vendredi</span>
            <p>Soirée détente au bord de la piscine</p>
            <a href="#">En savoir plus →</a>
        </div>
      <div>
    </div>
</section>

<section class="partners-section">
  <h2 class="partners-title">NOS PARTENAIRES</h2>
  <p class="partners-subtitle">
    Nous sommes fiers de collaborer avec des partenaires passionnés qui partagent notre vision.
  </p>
  <div class="partners-logos">
    <img src="images/marques/hotel-presi.png" alt="president">
    <img src="images/marques/hpp.png" alt="Hp resort">

    <img src="images/marques/crf .png" alt="Hotel carrefour_Segue">

    <!--img src="images/marques/sodertour.png" alt="Hp resort"-->

    <img src="images/marques/sonapie_.png" alt="Sonapie">
  </div>
</section>
</main>
</div>

<!-- Bouton Retour en haut -->
<button class="scroll-to-top" id="scrollToTop" aria-label="Retour en haut">
  <svg viewBox="0 0 24 24">
    <polyline points="18 15 12 9 6 15"></polyline>
  </svg>
</button>

<footer class="py-5 text-white"> <div class="container"> 
  <div class="row"> 
    <!-- Colonne gauche : réseaux sociaux -->
    <div class="footer-left col-md-6 text-start text-white">
      <h5>Nos Reseaux</h5><br>
      <a href="https://www.facebook.com/share/1DQT3Vvt4y/"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-twitter-x"></i></a>
      <a href="https://www.instagram.com/clubpresidentgolf/?utm_source=qr&igsh=bGcwMm45MG1kNWNy"><i class="bi bi-instagram"></i></a>
      <a href=""><i class="bi bi-youtube"></i></a>
      <a href="https://www.tiktok.com/@president.golf.cl?_r=1&_t=ZM-92w9sVfTOn5"><i class="bi bi-tiktok"></i></a>
      <a href="https://www.linkedin.com/in/pr%C3%A9sident-golf-club-14a87a3a5">
        <img src="images/marques/linkedin.png" alt="linkedin" class="rounded-circle" width="30" height="25">
      </a>
    </div>

    <!-- Colonne droite : contacts -->
    <div class="footer-right col-md-6 text-start text-white">
      <h4>Infoline:</h4>
      <div id="contact" class=" ">
        📞 TELEPHONE:  +225 01 23 45 67 / 07 12 72 13 42 <br>
        <p> ✉️ EMAIL:  golfadd@gmail.com </p>
        📍 ADRESSE:
         Rue de la Fondation, Derrière l'hotel president, Yamoussoukro<br>
      </div>
    </div>
  <!-- Ligne du bas -->
  <div class="footer-bottom text-center text-white mt-4">
    <p class="mb-0">© 2026 Président Golf Club – Tous droits réservés</p>
  </div>
</footer>


<script src="https://cdn.jsdevr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Swiper JS -->
   <script src="feuille_css-js/script-Copie.js"></script>
   <script src="feuille_css-js/em.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
const container = document.querySelector('.scroll-wrapper');

function scrollLeft() {
    container.scrollBy({ left: -350, behavior: 'smooth' });
}

function scrollRight() {
    container.scrollBy({ left: 350, behavior: 'smooth' });
}

</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const text = document.getElementById("flash-info");
    const carouselElement = document.getElementById("backgroundCarousel");

    // Initialisation du carousel Bootstrap (arrêté)
    const carousel = new bootstrap.Carousel(carouselElement, {
      interval: 3000,
      ride: false
    });

    // 1️⃣ Disparition du texte après 5 secondes
    setTimeout(() => {
      text.classList.add("hide");

      // 2️⃣ Démarrage du carousel après le fondu
      setTimeout(() => {
        text.style.display = "none";
        carousel.cycle(); // démarre le défilement
      }, 1000); // durée du fondu
    }, 5000);
  });
</script>
<script>
  
    const espacesSwiper = new Swiper('.espaces-swiper', {
        loop: false,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.espaces-button-next',
            prevEl: '.espaces-button-prev',
        },
        breakpoints: {
            320: { slidesPerView: 1, spaceBetween: 20 },
            768: { slidesPerView: 2, spaceBetween: 25 },
            992: { slidesPerView: 3, spaceBetween: 30 }
        }
    });
</script>

<script>
  const openImage = document.getElementById("openImage");
  const modal = document.getElementById("imageModal");
  const modalImg = document.getElementById("modalImage");
  const closeBtn = document.getElementById("closeBtn");

  openImage.addEventListener("click", function () {
    modal.style.display = "flex";
    modalImg.src = this.src;
  });

  closeBtn.addEventListener("click", function () {
    modal.style.display = "none";
  });

  modal.addEventListener("click", function (e) {
    if (e.target === modal) {
      modal.style.display = "none";
    }
  });
</script>

<!-- Script du bouton Retour en haut -->
<script>
  // Gestion du bouton scroll to top
  (function() {
    const scrollToTopBtn = document.getElementById('scrollToTop');

    // Afficher/masquer le bouton selon le scroll
    window.addEventListener('scroll', function() {
      if (window.scrollY > 400) {
        scrollToTopBtn.classList.add('visible');
      } else {
        scrollToTopBtn.classList.remove('visible');
      }
    });

    // Action au clic : remonter en haut
    scrollToTopBtn.addEventListener('click', function() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  })();
</script>

<!-- Script du Loader -->
<script>
  // Gestion du loader
  document.addEventListener('DOMContentLoaded', function() {
    const loader = document.getElementById('loader');
    const progressBar = document.getElementById('progressBar');

    // Simuler le chargement progressif (plus rapide)
    let progress = 0;
    const interval = setInterval(() => {
      progress += Math.random() * 25;
      if (progress >= 100) {
        progress = 100;
        clearInterval(interval);
      }
      progressBar.style.width = progress + '%';
    }, 100);

    // Masquer le loader une fois la page chargée
    window.addEventListener('load', function() {
      // Compléter rapidement la barre
      setTimeout(() => {
        progressBar.style.width = '100%';

        // Transition rapide vers le contenu
        setTimeout(() => {
          loader.classList.add('fade-out');

          // Supprimer le loader du DOM après l'animation
          setTimeout(() => {
            loader.style.display = 'none';
          }, 500);
        }, 150);
      }, 200);
    });
  });
</script>

</body>
</html>