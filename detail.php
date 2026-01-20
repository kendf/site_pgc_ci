<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails - Président Golf Club</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #1a5fb4;
            --primary-dark: #0d4a94;
            --secondary-color: #26a269;
            --accent-color: #cd8e20;
            --light-color: #f8f9fa;
            --dark-color: #2d3748;
            --gray-color: #718096;
            --light-gray: #e2e8f0;
            --border-radius: 12px;
            --box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark-color);
            line-height: 1.6;
            background-color: #f5f7fa;
        }

        /* Header */
        .detail-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            padding: 15px 0;
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary-color);
            text-decoration: none;
        }

        .logo span {
            color: var(--secondary-color);
        }

        .back-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            background: var(--primary-color);
            color: white;
            padding: 12px 24px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            box-shadow: 0 4px 12px rgba(26, 95, 180, 0.3);
        }

        .back-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(26, 95, 180, 0.4);
        }

        /* Hero Section */
        .detail-hero {
            position: relative;
            height: 65vh;
            min-height: 500px;
            margin-top: 80px;
            overflow: hidden;
            border-radius: 0 0 30px 30px;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.8);
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.7));
        }

        .hero-content {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            color: white;
            padding: 0 20px 60px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .hero-badge {
            display: inline-block;
            background: var(--accent-color);
            color: white;
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 20px;
            align-self: flex-start;
        }

        .hero-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
        }

        /* Main Content */
        .detail-container {
            max-width: 1200px;
            margin: -50px auto 0;
            padding: 0 20px;
            position: relative;
            z-index: 10;
        }

        .content-card {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 40px;
            margin-bottom: 30px;
        }

        /* Info Grid */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .info-card {
            background: var(--light-color);
            padding: 25px;
            border-radius: var(--border-radius);
            border-left: 4px solid var(--primary-color);
            transition: var(--transition);
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .info-icon {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .info-card h3 {
            font-size: 1.1rem;
            margin-bottom: 10px;
            color: var(--dark-color);
            font-weight: 600;
        }

        .info-card p, .info-card ul {
            color: var(--gray-color);
            font-size: 0.95rem;
        }

        .info-card ul {
            padding-left: 20px;
        }

        .info-card li {
            margin-bottom: 5px;
        }

        /* Features Section */
        .features-section {
            margin-bottom: 40px;
        }

        .section-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.8rem;
            margin-bottom: 25px;
            color: var(--dark-color);
            position: relative;
            padding-bottom: 10px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--primary-color);
            border-radius: 2px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        .feature-item {
            display: block;
            align-items: center;
            gap: 15px;
            padding: 15px;
            background: var(--light-color);
            border-radius: 10px;
            transition: var(--transition);
        }

        .feature-item:hover {
            background: #e8f0fe;
            transform: translateX(5px);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            background: var(--primary-color);
            color: white;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .feature-text strong {
            color: var(--dark-color);
            display: block;
            margin-bottom: 5px;
        }

        .feature-text span {
            color: var(--gray-color);
            font-size: 0.9rem;
        }

        /* Gallery */
        .gallery-section {
            margin-bottom: 40px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .gallery-item {
            position: relative;
            border-radius: var(--border-radius);
            overflow: hidden;
            height: 250px;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            color: white;
            padding: 20px;
            transform: translateY(100%);
            transition: var(--transition);
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border-radius: var(--border-radius);
            padding: 50px;
            text-align: center;
            margin-bottom: 40px;
        }

        .cta-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.2rem;
            margin-bottom: 15px;
        }

        .cta-text {
            font-size: 1.1rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .cta-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 14px 30px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            font-size: 1rem;
        }

        .btn-primary {
            background: white;
            color: var(--primary-color);
        }

        .btn-primary:hover {
            background: var(--light-color);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-3px);
        }

        /* Loading States */
        .loading-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 70vh;
            padding: 40px;
        }

        .loading-spinner {
            width: 60px;
            height: 60px;
            border: 4px solid var(--light-gray);
            border-top-color: var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-bottom: 20px;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .detail-hero {
                height: 50vh;
                min-height: 400px;
            }

            .hero-title {
                font-size: 2.2rem;
            }

            .content-card {
                padding: 25px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .cta-section {
                padding: 30px 20px;
            }

            .cta-title {
                font-size: 1.8rem;
            }

            .header-container {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }

            .hero-content {
                padding-bottom: 40px;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 1.8rem;
            }

            .cta-buttons {
                flex-direction: column;
                width: 100%;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .detail-hero {
                height: 45vh;
                min-height: 350px;
            }
        }

        /* Animation */
        .fade-in {
            animation: fadeIn 0.8s ease forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Breadcrumb */
        .breadcrumb {
            padding: 15px 0;
            background: var(--light-color);
            margin-top: 80px;
        }

        .breadcrumb-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .breadcrumb a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .breadcrumb span {
            color: var(--gray-color);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="detail-header">
        <div class="header-container">
            <a href="main_index - Copie.php" class="logo">
                <i class="fas fa-golf-ball"></i> Président<span>Golf</span>Club
            </a>
            <a href="main_index - Copie.php" class="back-btn">
                <i class="fas fa-arrow-left"></i>
                Retour à l'accueil
            </a>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <div class="breadcrumb-content">
            <a href="main_index - Copie.php">Accueil</a>
            <i class="fas fa-chevron-right"></i>
            <a href="#">Nos Espaces</a>
            <i class="fas fa-chevron-right"></i>
            <span id="current-section">Chargement...</span>
        </div>
    </div>

    <!-- Loading State -->
    <div id="loading" class="loading-container">
        <div class="loading-spinner"></div>
        <h2>Chargement des informations...</h2>
        <p>Veuillez patienter</p>
    </div>

    <!-- Hero Section (Will be populated dynamically) -->
    <section id="hero-section" class="detail-hero" style="display: none;">
        <img id="hero-image" src="" alt="" class="hero-bg">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <span class="hero-badge" id="section-category">Espace Premium</span>
            <h1 class="hero-title" id="section-title">Titre de la section</h1>
            <p class="hero-subtitle" id="section-description">Description de la section</p>
        </div>
    </section>

    <!-- Main Content (Will be populated dynamically) -->
    <main id="main-content" class="detail-container" style="display: none;">
        <!-- Overview Card -->
        <div class="content-card fade-in">
            <div class="info-grid">
                <!-- Will be populated dynamically -->
            </div>
        </div>

        <!-- Features Card -->
        <div class="content-card fade-in" id="features-section" style="display: none;">
            <h2 class="section-title">Caractéristiques</h2>
            <div class="features-grid" id="features-grid">
                <!-- Will be populated dynamically -->
            </div>
        </div>

        <!-- Gallery Card -->
        <div class="content-card fade-in" id="gallery-section" style="display: none;">
            <h2 class="section-title">Galerie Photos</h2>
            <div class="gallery-grid" id="gallery-grid">
                <!-- Will be populated dynamically -->
            </div>
        </div>

        <!-- CTA Section -->
        <div class="cta-section fade-in">
            <h2 class="cta-title">Visitez notre espace</h2>
            <p class="cta-text">Réservez votre visite ou demandez plus d'informations</p>
            <div class="cta-buttons">
                <a href="tel:+2250123456789" class="btn btn-primary">
                    <i class="fas fa-phone"></i> Nous appeler
                </a>
                <a href="mailto:contact@presidentgolfclub.ci" class="btn btn-secondary">
                    <i class="fas fa-envelope"></i> Contact par email
                </a>
                <a href="#reservation" class="btn btn-secondary">
                    <i class="fas fa-calendar-alt"></i> Réserver en ligne
                </a>
            </div>
        </div>
    </main>

    <script>
        // Données dynamiques des sections
        const sectionsData = {
            "restau": {
                title: "Restaurant Cora",
                category: "Restaurant",
                description: "Cuisine raffinée avec vue panoramique sur le parcours de golf",
                heroImage: "images/5.jpg",
                color: "#1a5fb4",
                overview: {
                    presentation: "Un ensemble cloisonné sur une surface de 160 m² avec terrasse en hauteur offrant une vue large sur le parcours.",
                    schedule: "Ouvert 6j/7 (du mardi au dimanche) et les jours fériés de 07 H à 18 H",
                    dimension: "90 m²",
                    capacity: "150 Couverts",
                    usage: "Réceptions entre collègues, familles, et moments privilégiés en couple."
                },
                features: [
                    { icon: "fa-users", label: "Capacité", value: "150 personnes" },
                    { icon: "fa-utensils", label: "Type de menu", value: "Africain, Européen" },
                    { icon: "fa-concierge-bell", label: "Service", value: "Buffet et à la carte" },
                    { icon: "fa-crown", label: "Salon VIP", value: "Disponible" },
                    { icon: "fa-wifi", label: "Connexion", value: "Wi-Fi gratuit" },
                    { icon: "fa-parking", label: "Parking", value: "Gratuit" }
                ],
                gallery: [
                    "images/3.jpg",
                    "images/5.jpg",
                    "images/restau1.jpg",
                    "images/restau2.jpg"
                ]
            },
            "bar": {
                title: "Bar Green 19",
                category: "Bar & Lounge",
                description: "Lieu de rencontre convivial après une partie de golf",
                heroImage: "images/Nos_espaces/b1.jpg",
                color: "#22274f",
                overview: {
                    presentation: "Après un parcours de 18 trous, le Green 19 vous accueille avec ses jus de fruits du terroir et son café ivoirien d'exception.",
                    schedule: "Ouvert 7j/7 de 07 H à 18 H",
                    dimension: "70 m²",
                    capacity: "45 places"
                },
                features: [
                    { icon: "fa-tv", label: "Écrans TV", value: "Sport en direct" },
                    { icon: "fa-wine-glass", label: "Spécialités", value: "Cocktails premium" },
                    { icon: "fa-music", label: "Ambiance", value: "Musique lounge" },
                    { icon: "fa-wifi", label: "Wi-Fi", value: "Haut débit" },
                    { icon: "fa-thermometer-half", label: "Climatisation", value: "Oui" },
                    { icon: "fa-smoking", label: "Zone fumeurs", value: "Espace dédié" }
                ],
                gallery: [
                    "images/Acc_bar.jpg",
                    "images/Nos_espaces/b1.jpg",
                    "images/bar1.jpg",
                    "images/bar2.jpg"
                ]
            },
            "salle-poly": {
                title: "Salle Polyvalente",
                category: "Événements",
                description: "Espace modulable pour tous vos événements et réceptions",
                heroImage: "images/Nos_espaces/salle_poly.jpg",
                color: "#22274f",
                overview: {
                    presentation: "Un ensemble de trois salles modulables pour mariages, baptêmes, conférences et réunions d'affaires.",
                    schedule: "Ouvert 6j/7 (du mardi au dimanche) et les jours fériés de 07 H à 18 H",
                    dimension: "200 m²",
                    capacity: "150 places",
                    usage: "Cocktails, dîners assis, buffets dansants, conférences et projections."
                },
                features: [
                    { icon: "fa-expand", label: "Modulable", value: "Plusieurs configurations" },
                    { icon: "fa-video", label: "Équipement", value: "Projecteur disponible" },
                    { icon: "fa-volume-up", label: "Sonorisation", value: "Professionnelle" },
                    { icon: "fa-snowflake", label: "Climatisation", value: "oui" },
                    { icon: "fa-lightbulb", label: "Éclairage", value: "LED ajustable" },
                    { icon: "fa-chair", label: "Mobilier", value: "Moderne et confortable" }
                ],
                gallery: [
                    "images/4.jpg",
                    "images/Nos_espaces/Sp2.jpg",
                    "images/salle1.jpg",
                    "images/salle2.jpg"
                ]
            },
            "salle-reunion": {
                title: "Salle de Réunion",
                category: "Business",
                description: "Cadre professionnel pour vos réunions d'affaires",
                heroImage: "images/Nos_espaces/salle-reunion.jpg",
                color: "#22274f",
                overview: {
                    presentation: "Salle de réunion (ou Salle Bridge) offrant un cadre propice à la concentration et aux échanges professionnels.",
                    schedule: "Ouvert 09h à 18h du mardi au dimanche et les jours fériés",
                    dimension: "50 m²",
                    capacity: "30 places",
                    amenities: "Espace aménagé, tables et chaises ergonomiques, vitres teintées."
                },
                features: [
                    { icon: "fa-chalkboard", label: "Tableau", value: "Blanc interactif" },
                    { icon: "fa-video", label: "Visioconférence", value: "Équipement fourni" },
                    { icon: "fa-print", label: "Imprimante", value: "Disponible" },
                    { icon: "fa-coffee", label: "Coffee break", value: "Service inclus" },
                    { icon: "fa-wifi", label: "Wi-Fi", value: "Fibre optique" },
                    { icon: "fa-plug", label: "Prises", value: "Multiples prises RJ45" }
                ],
                gallery: [
                    "images/sr.jpg",
                    "images/Nos_espaces/salle-reunion.jpg",
                    "images/reunion1.jpg",
                    "images/reunion2.jpg"
                ]
            },
            "piscine": {
                title: "Piscine Panoramique",
                category: "Loisirs",
                description: "Piscine avec vue exceptionnelle sur le parcours de golf",
                heroImage: "images/pisc1.jpg",
                color: "#22274f",
                overview: {
                    presentation: "Piscine en forme de croissant lunaire située sur la terrasse du Club house avec vue panoramique sur le parcours.",
                    schedule: "Du mardi au dimanche et les jours fériés de 09 H à 18 H",
                    dimension: "Bassin principal : 25m × 10m<br>Petit bassin : pour enfants",
                    activities: "Baignade, détente, cours de natation avec maîtres-nageurs diplômés.",
                    capacity: "60 personnes maximum"
                },
                features: [
                    { icon: "fa-swimmer", label: "Maître-nageur", value: "Toujours présent" },
                    { icon: "fa-child", label: "Piscine enfants", value: "Bassin sécurisé" },
                    { icon: "fa-graduation-cap", label: "Cours", value: "Natation tous niveaux" },
                    { icon: "fa-sun", label: "Terasse", value: "Transats et parasols" },
                    { icon: "fa-shower", label: "Douches", value: "Chaudes et froides" },
                    { icon: "fa-umbrella-beach", label: "Service", value: "Bar de piscine" }
                ],
                gallery: [
                    "images/pisc1.jpg",
                    "images/pisc2.jpg",
                    "images/piscine1.jpg",
                    "images/piscine2.jpg"
                ]
            },
            "golf": {
                title: "Parcours de Golf",
                category: "Sport",
                description: "L'un des plus beaux parcours d'Afrique",
                heroImage: "images/Nos_espaces/golf-course-landscape.jpg",
                color: "#22274f",
                overview: {
                    presentation: "Parcours classé parmi les plus beaux d'Afrique, toujours impeccablement entretenu pour le plaisir des golfeurs.",
                    schedule: "Ouvert 6j/7 (du mardi au dimanche) et les jours fériés de 07H30 à 18 H",
                    activities: "Initiation individuelle et en entreprise, coaching, training de moniteurs, tournois et compétitions."
                },
                features: [
                    { icon: "fa-tree", label: "Paysage", value: "Vallonné et boisé" },
                    { icon: "fa-water", label: "Obstacles", value: "Plans d'eau naturels" },
                    { icon: "fa-golf-ball", label: "Matériel", value: "Location disponible" },
                    { icon: "fa-user-tie", label: "Professionnels", value: "Moniteurs diplômés" },
                    { icon: "fa-flag", label: "18 trous", value: "Parcours complet" },
                    { icon: "fa-car", label: "Voiturettes", value: "Électriques" }
                ],
                gallery: [
                    "images/1-3.jpg",
                    "images/Nos_espaces/golf-course-landscape.jpg",
                    "images/golf1.jpg",
                    "images/golf2.jpg"
                ]
            },
            "fitness": {
                title: "Centre de Fitness",
                category: "Sport & Santé",
                description: "Salle de remise en forme et musculation moderne",
                heroImage: "images/Nos_espaces/equipment.jpg",
                color: "#22274f",
                overview: {
                    presentation: "Centre de fitness entièrement équipé pour la préparation physique et la remise en forme.",
                    schedule: "De 08 h à 18 h / mardi au dimanche et jours fériés",
                    dimension: "60 m²",
                    specs: "Grand miroir mural, aération centrale, appareils de musculation haut de gamme."
                },
                features: [
                    { icon: "fa-running", label: "Cardio", value: "Tapis, vélos, elliptiques" },
                    { icon: "fa-dumbbell", label: "Musculation", value: "Appareils professionnels" },
                    { icon: "fa-user-friends", label: "Coaching", value: "Personnalisé" },
                    { icon: "fa-snowflake", label: "Climatisation", value: "Régulée" },
                    { icon: "fa-music", label: "Ambiance", value: "Playlist énergisante" },
                    { icon: "fa-lock", label: "Casiers", value: "Sécurisés" }
                ],
                gallery: [
                    "images/Nos_espaces/fit2.jpg",
                    "images/Nos_espaces/equipment.jpg",
                    "images/fitness1.jpg",
                    "images/fitness2.jpg"
                ]
            }
        };

        // Fonction pour charger une section
        async function loadSection(sectionId) {
            const loadingEl = document.getElementById('loading');
            const heroEl = document.getElementById('hero-section');
            const mainEl = document.getElementById('main-content');
            const breadcrumbEl = document.getElementById('current-section');

            try {
                // Récupérer les données
                const sectionData = sectionsData[sectionId];
                
                if (!sectionData) {
                    throw new Error(`Section "${sectionId}" non trouvée`);
                }

                // Mettre à jour le titre de la page
                document.title = `${sectionData.title} - Président Golf Club`;
                
                // Mettre à jour le breadcrumb
                breadcrumbEl.textContent = sectionData.title;

                // Masquer le loading
                loadingEl.style.display = 'none';

                // Afficher la section hero
                document.getElementById('section-title').textContent = sectionData.title;
                document.getElementById('section-category').textContent = sectionData.category;
                document.getElementById('section-description').textContent = sectionData.description;
                document.getElementById('hero-image').src = sectionData.heroImage;
                document.getElementById('hero-image').alt = sectionData.title;
                
                // Appliquer la couleur primaire
                document.documentElement.style.setProperty('--primary-color', sectionData.color);
                
                heroEl.style.display = 'block';

                // Afficher le contenu principal
                mainEl.style.display = 'block';

                // Générer le contenu
                generateOverview(sectionData.overview);
                generateFeatures(sectionData.features);
                generateGallery(sectionData.gallery);

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
        }

        // Générer la section overview
        function generateOverview(overview) {
            const gridEl = document.querySelector('.info-grid');
            gridEl.innerHTML = '';

            const overviewItems = [
                { icon: 'fa-info-circle', title: 'Présentation', content: overview.presentation },
                { icon: 'fa-clock', title: 'Horaires', content: overview.schedule },
                { icon: 'fa-expand', title: 'Dimensions', content: overview.dimension, show: overview.dimension },
                { icon: 'fa-users', title: 'Capacité', content: overview.capacity, show: overview.capacity },
                { icon: 'fa-calendar-check', title: 'Utilisation', content: overview.usage, show: overview.usage },
                { icon: 'fa-swimmer', title: 'Activités', content: overview.activities, show: overview.activities },
                { icon: 'fa-check-circle', title: 'Commodités', content: overview.amenities, show: overview.amenities },
                { icon: 'fa-list-alt', title: 'Spécifications', content: overview.specs, show: overview.specs }
            ];

            overviewItems.forEach(item => {
                if (item.show !== undefined && !item.show) return;
                
                const card = document.createElement('div');
                card.className = 'info-card';
                card.innerHTML = `
                    <i class="fas ${item.icon} info-icon"></i>
                    <h3>${item.title}</h3>
                    ${item.content.includes('<') ? item.content : `<p>${item.content}</p>`}
                `;
                gridEl.appendChild(card);
            });
        }

        // Générer les caractéristiques
        function generateFeatures(features) {
            const featuresSection = document.getElementById('features-section');
            const featuresGrid = document.getElementById('features-grid');
            
            if (features && features.length > 0) {
                featuresSection.style.display = 'block';
                featuresGrid.innerHTML = '';
                
                features.forEach(feature => {
                    const item = document.createElement('div');
                    item.className = 'feature-item';
                    item.innerHTML = `
                        <div class="feature-icon">
                            <i class="fas ${feature.icon}"></i>
                        </div>
                        <div class="feature-text">
                            <strong>${feature.label}</strong>
                            <span>${feature.value}</span>
                        </div>
                    `;
                    featuresGrid.appendChild(item);
                });
            }
        }

        // Générer la galerie
        function generateGallery(gallery) {
            const gallerySection = document.getElementById('gallery-section');
            const galleryGrid = document.getElementById('gallery-grid');
            
            if (gallery && gallery.length > 0) {
                gallerySection.style.display = 'block';
                galleryGrid.innerHTML = '';
                
                gallery.forEach((imgSrc, index) => {
                    const item = document.createElement('div');
                    item.className = 'gallery-item';
                    item.innerHTML = `
                        <img src="${imgSrc}" alt="Photo ${index + 1}">
                        <div class="gallery-overlay">
                            <p>Vue ${index + 1}</p>
                        </div>
                    `;
                    
                    // Click pour agrandir l'image
                    item.addEventListener('click', () => {
                        openLightbox(imgSrc);
                    });
                    
                    galleryGrid.appendChild(item);
                });
            }
        }

        // Lightbox pour les images
        function openLightbox(imgSrc) {
            const lightbox = document.createElement('div');
            lightbox.style.cssText = `
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.9);
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 2000;
                cursor: pointer;
            `;
            
            const img = document.createElement('img');
            img.src = imgSrc;
            img.style.cssText = `
                max-width: 90%;
                max-height: 90%;
                object-fit: contain;
                border-radius: 10px;
            `;
            
            lightbox.appendChild(img);
            document.body.appendChild(lightbox);
            
            lightbox.addEventListener('click', () => {
                document.body.removeChild(lightbox);
            });
        }

        // Au chargement de la page
        document.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);
            const sectionName = urlParams.get('section');
            
            if (sectionName && sectionsData[sectionName]) {
                loadSection(sectionName);
            } else {
                // Par défaut, charger la première section
                const firstSection = Object.keys(sectionsData)[0];
                loadSection(firstSection);
            }
        });

        // Gestion responsive du header
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.detail-header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.98)';
                header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.15)';
            } else {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
            }
        });
    </script>
</body>
</html>