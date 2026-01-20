<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Académie du Golf</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="feuille_css-js/styles.css">
</head>
<body>

    <style>
      header{
        height: 70px;
      }
      
    </style>
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
            <a class="nav-link" href="main_index - Copie.html#espaces">Nos Espaces</a>
            <ul class="dropdown-menu-custom">
              <li><a href="main_index - Copie.php#restau">Restaurant Cora</a></li>
              <li><a href="main_index - Copie.php#bar">Bar Green 19</a></li>
              <li><a href="main_index - Copie.php#salle-poly">Salle polyvalente</a></li>
              <li><a href="main_index - Copie.php#salle-reunion">Salle de réunion</a></li>
              <li><a href="main_index - Copie.php#golf">Golf</a></li>
              <li><a href="main_index - Copie.php#piscine">Piscine</a></li>
              <li><a href="main_index - Copie.php#fitness">Fitness center</a></li>
              <li><a href="main_index - Copie.php">Le traiteur du PGC</a></li>
            </ul>
          </li>

          <li class="nav-item nav-hover">
            <a class="nav-link" href="#">Galerie</a>
            <ul class="dropdown-menu-custom">
              <li><a href="#">Photos</a></li>
              <li><a href="#">Vidéos</a></li>
            </ul>
          </li>

          <li class="nav-item nav-hover">
            <a class="nav-link" href="main_index - Copie.php#evenement">Événement & Média</a>
            <ul class="dropdown-menu-custom">
              <li><a href="#">Tournois</a></li>
              <li><a href="#">Communiqués</a></li>
              <li><a href="#">Presse</a></li>
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

          <li class="nav-item nav-hover">
            <a class="nav-link" href="main_index - Copie.php">Accueil</a>
          </li>
       </ul> 
      </div>

    </div>
  </nav>
</header>
  <!-- HERO -->

  <section class="hero-slider">
  <div class="slides">
    <div class="slide active" style="background-image: url('images/slide-acad/bg2.jpeg');">
      <div class="overlay"></div>
      <div class="container hero-content">
        <h1>Rejoignez notre Académie de Golf</h1>
        <p>Perfectionnez votre jeu avec nos programmes de formation sur mesure.</p>
        <a href="#programmes" class="btn btn-scroll hero-btn">Découvrir nos programmes</a>
      </div>
    </div>
    <div class="slide" style="background-image: url('images/slide-acad/bg3.jpeg');">
      <div class="overlay"></div>
      <div class="container hero-content">
        <h1>Élevez votre swing</h1>
        <p>Nos coachs vous accompagnent à chaque étape.</p>
        <a href="#programmes" class="btn btn-scroll hero-btn">Voir les programmes</a>
      </div>
    </div>
    <div class="slide" style="background-image: url('images/slide-acad/bg1.jpeg');">
      <div class="overlay"></div>
      <div class="container hero-content">
        <h1>Vivez le golf autrement</h1>
        <p>Une expérience unique dans notre académie.</p>
        <a href="#programmes" class="btn btn-scroll hero-btn">Rejoindre maintenant</a>
      </div>
    </div>
  </div>
</section>
  <!-- PROGRAMMES -->
  <section id="programmes" class="programs reveal">
    <div class="container">
      <div class="program">
        <img src="initiation.jpg" alt="Initiation">
        <h2>Initiation</h2>
        <p>Découvrez les bases du golf avec nos instructeurs experts.</p>
        <a href="#" class="btn">En savoir plus</a>
      </div>

      <div class="program">
        <img src="perfectionnement.jpg" alt="Perfectionnement">
        <h2>Perfectionnement</h2>
        <p>Améliorez votre technique et votre stratégie sur le parcours.</p>
        <a href="#" class="btn">En savoir plus</a>
      </div>

      <div class="program">
        <img src="coaching.jpg" alt="Coaching personnalisé">
        <h2>Coaching personnalisé</h2>
        <p>Bénéficiez d'un accompagnement sur mesure pour atteindre vos objectifs.</p>
        <a href="#" class="btn">En savoir plus</a>
      </div>
    </div>
  </section>
  <section class="coaches reveal">
  <div class="container">
    <h2 class="section-title">Nos Coachs</h2>

    <div class="coach-grid">
      <div class="coach-card">
        <img src="coach1.jpg" alt="Coach principal">
        <h3>Tanoh Jean</h3>
        <p>Coach certifié – 15 ans d’expérience</p>
      </div>

      <div class="coach-card">
        <img src="coach2.jpg" alt="Coach technique">
        <h3>Konan Sylvert</h3>
        <p>Spécialiste swing & précision</p>
      </div>

      <div class="coach-card">
        <img src="coach3.jpg" alt="Coach mental">
        <h3>Kone Abou</h3>
        <p>Préparation mentale & performance</p>
      </div>
    </div>
  </div>
</section>

<section class="cta reveal">
  <div class="container">
    <h2>Prêt à rejoindre l’Académie ?</h2>
    <p>Progressez, perfectionnez votre jeu et vivez l’expérience du golf autrement.</p>
    <a href="#adhesion" class="btn btn-cta">Rejoindre l’Académie</a>
  </div>
</section>
<section id="adhesion" class="academy-section">
  <div class="academy-container">
  <h1 class="py-5 p">Adherer à Académie</h1><br>
    <!-- COLONNE GAUCHE -->
    <div class="academy-left">

      <div class="academy-block">
        <h4>Conditions d’adhésion</h4>
        <p>
          Être passionné de golf, débutant ou confirmé.
          L’adhésion est ouverte aux adultes et aux juniors
          selon les programmes proposés.
        </p>
      </div>

      <div class="academy-block">
        <h4>Avantages</h4>
        <p>
          Coaching personnalisé, accès prioritaire aux installations,
          événements exclusifs et accompagnement tout au long de l’année.
        </p>
      </div>

      <button id="openModal" class="btn academy-btn">
        Inscription
      </button>
    </div>

    <!-- COLONNE DROITE -->
    <div class="academy-right">
      <!--h3>Découvrir l’Académie</h3-->

      <img src="images/Slide_ACC/bg3.jpeg" alt="Académie de golf" class="academy-image">

      <section class="caracteristiques">

        <h3 class="academy-subtitle">TARIFS</h3>
          <div class="grid-cards">
            <div class="academy-card"><strong>  Débutant : </strong> 50 000 FCFA</div>
            <div class="academy-card"><strong>  Intermédiaire : </strong> 80 000 FCFA</div>
            <div class="academy-card"><strong>  Confirmé : </strong> 150 000 FCFA</div>
            <div class="academy-card"><strong>  Junior : </strong> 250 000 FCFA</div>
            <div class="academy-card"><strong>  Stage intensif : </strong> 350 000 FCFA</div>
            <div class="academy-card"><strong>  Coaching privé :</strong> Sur devis</div>
          </div>
      </section>
    </div>

  </div>
</section>

<div id="modalInscription" class="modal-overlay">
    <div class="signup-card">
        <span class="close-btn">&times;</span>

        <div class="card-header">
            <div class="avatar rounded-circle" style="background-image: url('images/balle.jpeg');"></div>
        </div>

        <h3>S'INSCRIRE</h3>

        <form>
            <input type="text" placeholder="Nom" name="last_name" id="last_name" required>
            <input type="text" placeholder="Prénom"name="first_name" id="first_name" required>
            <input type="email" placeholder="Email" name="mai" id="mail" required>
            <input type="password" placeholder="Mot de passe" name="pw" id="pw" required>
            <input type="password" placeholder="confirmer le Mot de passe" name="confirm_pw" id="confirm_pw" required>
            <input type="tel" placeholder="Téléphone" name="tel" id="tel">
            <label for="tarif">Choisissez votre Tarif:</label>
            <select name="tarif" id="tarif">
                <option value="Tarif1">Debutant</option>
                <option value="Tarif2">Intermediaire</option>
                <option value="Tarif3">Confirmé</option>
                <option value="Tarif4">Junior</option>
                <option value="Tarif5">Stage intensif</option>
                <option value="Tarif6">Coaching privé</option>
            </select>

            <button type="submit" class="signup-btn">
                S'inscrire
            </button>
        </form>
    </div>
</div>

  <!-- JS -->
  <script>
    // Scroll fluide bouton hero
    const scrollBtn = document.querySelector('.btn-scroll');

    if (scrollBtn) {
      scrollBtn.addEventListener('click', e => {
        e.preventDefault();
        document.querySelector('#programmes')
          .scrollIntoView({ behavior: 'smooth' });
      });
    }

    // Reveal au scroll
    const reveals = document.querySelectorAll('.reveal');

    const revealOnScroll = () => {
      reveals.forEach(section => {
        const top = section.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (top < windowHeight - 100) {
          section.classList.add('active');
        }
      });
    };

    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll();
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll(".hero-slider .slide");
  let index = 0;

  // Sécurité
  if (slides.length === 0) return;

  slides[index].classList.add("active");

  setInterval(() => {
    slides[index].classList.remove("active");
    index = (index + 1) % slides.length;
    slides[index].classList.add("active");
  }, 5000);
});
</script>

</body>
</html>