<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Président Golf Club</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="feuille_css-js/style-Copie.css">
    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

     <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Testimonial Slider | Bedimcode</title>
  <!-- Iconscout CDN -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

<style>

  /* ================= RESTAURANT / ESPACES ================= */
  .restau-layout {
    display: flex;
    gap: 30px;
    align-items: flex-start;
    background-color: #e6f4df;
  }
  
  .left {
    width: 30%;
    padding: 20px;
  }
  
  .center {
    flex: 1;
    background: #fff;
    padding: 20px;
  }
  
  .right {
    width: 70%;
    background: #f9f9f9;
    padding: 20px;
  }
  
  .right img {
    width: 100%;
    height:100%;
    border-radius: 10px;
  }
  
  /* ================= CARACTÉRISTIQUES ================= */
  .caracteristiques {
    padding: 50px 20px;
    background: #e6f4df;
  }
  
  .grid-caract {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  }
  
  .grid-caract .carte {
    background: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
  }
  
  @media (max-width: 768px) {
    .grid-caract {
      grid-template-columns: 1fr;
    }
  }
  
  /* ================= MODAL INSCRIPTION ================= */
  .modal-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.6);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 9999;
  }
.nav-hover {
  position: relative;
}

.dropdown-menu-custom {
  list-style: none;
  padding: 10px 0;
  margin: 0;
  position: absolute;
  top: 120%;
  left: 0;
  min-width: 200px;
  background: white;
  border-radius: 12px;
  box-shadow: 0 15px 40px rgba(0,0,0,0.2);
  opacity: 0;
  visibility: hidden;
  transform: translateY(10px);
  transition: all 0.3s ease;
  z-index: 999;
}

.nav-hover:hover .dropdown-menu-custom {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}

.dropdown-menu-custom a {
  display: block;
  padding: 10px 20px;
  text-decoration: none;
  color: #333;
  font-weight: 500;
}

.dropdown-menu-custom a:hover {
  background: #f5f5f5;
  /*color: #198754;*/
}

footer i.bi {
  font-size: 1.8rem;
  color: white;
  margin: 0 10px;
  cursor: pointer;
  transition: 0.3s;
}

footer i.bi:hover {
  color: #ffc107;
  transform: scale(1.2);
}


.contact-container {
      position: relative; /* nécessaire pour positionner la fenêtre */
      display: inline-block;
      cursor: pointer;
    }

    .contact-container a {
      text-decoration: none;
      font-weight: bold;
      color: #0073e6;
    }

    /* Fenêtre cachée par défaut */
    .tooltip {
      visibility: hidden;
      opacity: 0;
      transition: opacity 0.3s ease;
      width: 260px;
      height: 150px;
      background-color: #f9f9f9;
      color: #333;
      text-align: left;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      position: absolute;
      z-index: 1;
      top: 120%; /* en dessous du texte */
      left: 50%;
      transform: translateX(-50%);
      box-shadow: 0px 4px 8px rgba(0,0,0,0.2);
    }

    /* Affichage au survol */
    .contact-container:hover .tooltip {
      visibility: visible;
      opacity: 1;
    }
    .photo{
        margin-left:50px;
        padding-bottom: 15px;
    }

    .event-carde {
        background-image: url('images/acad.jpg');
        height: 300px;
        border:white solid 3px;
        color: #f9f9f9;
        border-radius: 0%;
    }
    .event-content{
        display: flex;
    }
    .event-card-ch{
        background-image: url('images/C5.jpg');
        height: 300px;

    }

   /* ================= BASE ================= */
body {
  font-family: "Segoe UI", Arial, sans-serif;
  background: #f4f6f5;
  color: #222;
}

section {
  padding: 70px 0;
}

h2, h3 {
  font-weight: 600;
  letter-spacing: 0.5px;
}

/* ================= NAV ================= */
.navbar {
  background: #ffffff;
}

.nav-link {
  font-weight: 500;
}

/* ================= HERO / EVENTS ================= */
.event-carde,
.event-card-ch {
  background-size: cover;
  background-position: center;
  height: 320px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.event-content {
  background: rgba(0, 0, 0, 0.65);
  color: white;
  padding: 40px;
  max-width: 1250px;
  height:320px;
  text-align: center;
}

.event-content h2 {
  font-size: 2rem;
}

/* ================= BUTTONS ================= */
.btn-success {
  background-color: #198754;
  border: none;
}

.btn-success:hover {
  background-color: #157347;
}

/* ================= TEAM ================= */
.team-section {
  background: #ffffff;
}

.team-card {
  background: #f8f9f8;
  border-radius: 12px;
  padding: 25px;
  text-align: center;
  transition: 0.3s;
}

.team-card:hover {
  transform: translateY(-6px);
}

.team-card img {
  width: 110px;
  height: 110px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 15px;
}

/* ================= ADHESION ================= */
.video-container {
  width: 100%;
  height: 45vh;
  object-fit: cover;
}

.restau-layout {
  background: #ffffff;
  border-radius: 16px;
  padding: 40px;
  gap: 40px;
  box-shadow: 0 15px 40px rgba(0,0,0,0.08);
}

.left h3 {
  color: #198754;
}

/* ================= TARIFS ================= */
.caracteristiques {
  background: transparent;
  padding: 20px 0;
}

.grid-caract {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.grid-caract .carte {
  background: #f8f9f8;
  border-radius: 12px;
  padding: 20px;
  text-align: center;
  font-weight: 500;
}

</style>
</head>

<body>

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

      <div class="contact-container"> 
        <p>Nous Contacter</p>
        <div class="tooltip"> 
          <strong>President Golf Club</strong><br> 
          📍 Adresse : millionnaire, Yamoussoukro<br> 
          📞 Téléphone : +225 01 23 45 67 / 0712721342<br> 
          <a href="mailto:emmanuellazidje17@gmail.com">✉️ </a>Email : golfadd@gmail.com 
        </div> 
      </div>

    </div>
  </nav>
</header>
<nav class="navbar navbar-expand-lg  navbar-light sticky-top">
  <div class="container">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item nav-hover"><a class="nav-link" href="#present">Presentation</a>
        <ul class="dropdown-menu-custom">
              <li><a href="#cours">Cours et Coaching</a></li>
              <li><a href="#coachs">Equipe des Coachs</a></li>
        </ul>
      </li>
      <li class="nav-item"><a class="nav-link" href="#adhesion">Adhesion</a></li>
      <li class="nav-item"><a class="nav-link" href="#adhesion">Inscription</a></li>
    </ul>
  </div>
</nav>

<section id="present" class="events">
    <div class="events-header">
        <h2>PRESENTATION</h2>
    </div>
    <div id="cours" class="event-carde  d-flex justify-content-center">
            <div class="event-content ">
                <h2 class="text-center py-5 me-3">COURS ET COACHING <br>
                     <div class="mt-4">
                    <a href="#adhesion" class="btn btn-light rounded-pill px-4 py-2 me-3">
                        Commencer
                    </a>
                </div>
                </h2>
               
            </div>
    </div>

    <section id="coachs"><div class="event-card-ch d-flex justify-content-center">
            <div class="event-content ">
                <div><h2 class="text-center py-5 me-3 "> EQUIPE DES COACHS </h2> <br>
                     <p> Notre équipe de coachs certifiés met son expertise et sa passion au service de votre progression. 
                    Alliant pédagogie personnalisée et technologies d'analyse de pointe, nous accompagnons chaque joueur, 
                    du débutant au compétiteur, pour libérer son plein potentiel et maximiser le plaisir sur le parcours</p>
                     </div>
            </div>
            
    </div> 
     <section class="team-section">
    <div class="container">
      <h2 class="text-center mb-5">PRESENTATION DE L'EQUIPE</h2>
      <div class="row">
        <div class="col-md-4 team-card">
          <img src="images/coach1.jpg" alt="coach1">
          <h5>Nom du Coach</h5>
          <p>Coach Principal</p>
        </div>
        <div class="col-md-4 team-card">
          <img src="images/coach2.jpg" alt="coach2">
          <h5>Nom du coach</h5>
          <p>Coach Secondaire</p>
        </div>
        <div class="col-md-4 team-card">
          <img src="images/coach3.jpg" alt="coach3">
          <h5>Nom du coach</h5>
          <p>Coach Suppleant</p>
        </div>
      </div>
    </div>
  </section>
</section>

<section id="adhesion">
    <!-- section Restaurant-->

   <div><img src="images/Nos_espaces/adh.jpeg"  class="video-container"></img></div>
 
    <div class="restau-layout">
      <div class="left">
       <div class="sous_titre"> <h3>Condition d'Adhesion</h3>
        <p>...</p>
        </div>
        <div class="sous_titre">
          <h3>Avantages</h3>
          <p>...</p>
        </div>
        <div class="mt-4">
           <button id="openModal" class="btn btn-light bg-success rounded-pill px-4 py-2 me-3">
                Inscription
            </button>
        </div>

    </div>
      
    <div class="right grid">
      <h3>...</h3>
      <img src="images/Slide_ACC/bg3.jpeg" width="250px" height="50" alt="adh" class="image">
      <section class="caracteristiques">
      <h3>Tarifs</h3>
      <div class="grid-caract">
        <div class="carte"><strong> Tarif :</strong>...</div>
        <div class="carte"><strong> Tarif :</strong>...</div>
        <div class="carte"><strong> Tarif :</strong>...</div>
        <div class="carte"><strong> Tarif :</strong>...</div>
        <div class="carte"><strong> Tarif :</strong>...</div>
        <div class="carte"><strong> Tarif :</strong>...</div>
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
                <option value="Tarif1">Tarif1</option>
                <option value="Tarif2">Tarif2</option>
                <option value="Tarif3">Tarif3</option>
                <option value="Tarif4">Tarif4</option>
            </select>

            <button type="submit" class="signup-btn">
                S'inscrire
            </button>
        </form>
    </div>
</div>


<script src="script.js"></script>
<footer class="bg-dark py-4 text-center">
    <div class="container">
        <a href="https://www.facebook.com/share/1DQT3Vvt4y/"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.instagram.com/clubpresidentgolf/?utm_source=qr&igsh=bGcwMm45MG1kNWNy"><i class="bi bi-instagram"></i></a>
        <i class="bi bi-youtube"></i>
        <a href="https://www.tiktok.com/@president.golf.cl?_r=1&_t=ZM-92w9sVfTOn5"><i class="bi bi-tiktok"></i></a>

        <p class="text-white mt-3 mb-0">
            © 2026 Président Golf Club – Tous droits réservés
        </p>
    </div>
</footer>

<script>
   document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function(e) {
      e.preventDefault();
      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth"
      });
    });
  });

    const openBtn = document.getElementById("openModal");
    const modal = document.getElementById("modalInscription");
    const closeBtn = document.querySelector(".close-btn");

    openBtn.onclick = () => modal.style.display = "flex";
    closeBtn.onclick = () => modal.style.display = "none";

    window.onclick = (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    };
</script>
</body>
</html>