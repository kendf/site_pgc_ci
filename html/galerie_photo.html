<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie Photos - President Golf</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #0c1a2d 0%, #1a3a5f 100%);
            color: #f8f8f8;
            min-height: 100vh;
            padding: 20px;
        }

        .gallery-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 30px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* HEADER */
        .gallery-header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 25px;
            border-bottom: 2px solid rgba(184, 134, 11, 0.5);
        }

        .gallery-title {
            font-size: 2.8rem;
            font-weight: 300;
            margin-bottom: 10px;
            color: #fff;
            letter-spacing: 1px;
        }

        .gallery-subtitle {
            font-size: 1.2rem;
            color: #e6d6a9;
            max-width: 700px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }

        .hotel-name {
            color: #b8860b;
            font-weight: 600;
        }

        /* PLAYLIST NAV */
        .playlist-nav {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .playlist-btn {
            padding: 14px 28px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(184, 134, 11, 0.3);
            color: #e6d6a9;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .playlist-btn:hover {
            background: rgba(184, 134, 11, 0.2);
            transform: translateY(-3px);
        }

        .playlist-btn.active {
            background: #b8860b;
            color: #0c1a2d;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(184, 134, 11, 0.4);
        }

        .playlist-btn i {
            font-size: 1.2rem;
        }

        /* MAIN GALLERY */
        .main-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .gallery-item {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            height: 280px;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .gallery-item:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
            z-index: 10;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .image-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(12, 26, 45, 0.95), transparent);
            padding: 25px;
            transform: translateY(30px);
            opacity: 0;
            transition: all 0.4s ease;
        }

        .gallery-item:hover .image-overlay {
            transform: translateY(0);
            opacity: 1;
        }

        .image-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: #fff;
        }

        .image-desc {
            font-size: 0.95rem;
            color: #e6d6a9;
            line-height: 1.5;
        }

        /* LIGHTBOX */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(12, 26, 45, 0.98);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .lightbox.active {
            display: flex;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .lightbox-content {
            max-width: 90%;
            max-height: 90%;
            position: relative;
        }

        .lightbox-img {
            max-width: 100%;
            max-height: 80vh;
            border-radius: 10px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.7);
        }

        .lightbox-info {
            position: absolute;
            bottom: -80px;
            left: 0;
            right: 0;
            text-align: center;
            color: white;
        }

        .lightbox-title {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: #b8860b;
        }

        .lightbox-desc {
            font-size: 1.1rem;
            color: #e6d6a9;
        }

        .close-btn, .nav-btn {
            position: absolute;
            background: rgba(184, 134, 11, 0.8);
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }

        .close-btn:hover, .nav-btn:hover {
            background: #b8860b;
            transform: scale(1.1);
        }

        .close-btn {
            top: 20px;
            right: 20px;
        }

        .prev-btn {
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
        }

        .next-btn {
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
        }

        /* THUMBNAILS */
        .thumbnails-container {
            margin-top: 30px;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .thumbnails-title {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: #b8860b;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .thumbnails {
            display: flex;
            gap: 15px;
            overflow-x: auto;
            padding-bottom: 15px;
            scrollbar-width: thin;
            scrollbar-color: #b8860b #0c1a2d;
        }

        .thumbnails::-webkit-scrollbar {
            height: 8px;
        }

        .thumbnails::-webkit-scrollbar-track {
            background: #0c1a2d;
            border-radius: 10px;
        }

        .thumbnails::-webkit-scrollbar-thumb {
            background: #b8860b;
            border-radius: 10px;
        }

        .thumbnail {
            width: 120px;
            height: 80px;
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer;
            opacity: 0.7;
            transition: all 0.3s ease;
            flex-shrink: 0;
            border: 2px solid transparent;
        }

        .thumbnail:hover, .thumbnail.active {
            opacity: 1;
            border-color: #b8860b;
            transform: scale(1.05);
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* COUNTER */
        .counter {
            text-align: center;
            margin-top: 30px;
            font-size: 1.1rem;
            color: #e6d6a9;
        }

        .counter span {
            color: #b8860b;
            font-weight: 600;
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .main-gallery {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
            
            .gallery-item {
                height: 250px;
            }
        }

        @media (max-width: 768px) {
            .gallery-container {
                padding: 20px;
            }
            
            .gallery-title {
                font-size: 2.2rem;
            }
            
            .main-gallery {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .playlist-btn {
                padding: 12px 20px;
                font-size: 0.9rem;
            }
            
            .lightbox {
                padding: 20px;
            }
            
            .close-btn, .nav-btn {
                width: 40px;
                height: 40px;
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="gallery-container">
        <!-- HEADER -->
        <div class="gallery-header">
            <h1 class="gallery-title">Galerie Photos du GOLF</h1>
            <p class="gallery-subtitle">
                Découvrez l'élégance et le raffinement du <span class="hotel-name">President Golf</span> 
                à travers nos collections photographiques. Naviguez entre les différentes ambiances.
            </p>
        </div>

        <!-- PLAYLIST NAVIGATION -->
<div class="playlist-nav">
    <button class="playlist-btn active" data-category="all">
        <i class="fas fa-golf-ball-tee"></i> Toutes les vues
    </button>
    <button class="playlist-btn" data-category="Restaurant">
        <i class="fas fa-1"></i> Restaurant Cora
    </button>
    <button class="playlist-btn" data-category="Bar">
        <i class="fas fa-9"></i> Bar Green 19
    </button>
    <button class="playlist-btn" data-category="sport">
        <i class="fas fa-star"></i> Salle Polyvalante
    </button>
    <button class="playlist-btn" data-category="reunion">
        <i class="fas fa-seedling"></i> Salle de réunion
    </button>
    <button class="playlist-btn" data-category="Golf">
        <i class="fas fa-hill-rockslide"></i> Golf
    </button>
    <button class="playlist-btn" data-category="piscine">
        <i class="fas fa-water"></i> Piscine
    </button>
    <button class="playlist-btn" data-category="fitness">
        <i class="fas fa-landmark"></i> Fitness center
    </button>
    <button class="playlist-btn" data-category="traiteur">
        <i class="fas fa-traiteur"></i> Traiteur du PGC
    </button>
</div>

        <!-- MAIN GALLERY -->
        <div class="main-gallery" id="gallery-grid">
            <!-- Images seront insérées ici par JavaScript -->
        </div>

        <!-- COUNTER -->
        <div class="counter">
            Affichage de <span id="current-count">12</span> photos sur <span id="total-count">48</span>
        </div>

        <!-- THUMBNAILS -->
        <div class="thumbnails-container">
            <h3 class="thumbnails-title">
                <i class="fas fa-images"></i> Navigation rapide
            </h3>
            <div class="thumbnails" id="thumbnails">
                <!-- Miniatures seront insérées ici -->
            </div>
        </div>
    </div>

    <!-- LIGHTBOX -->
    <div class="lightbox" id="lightbox">
        <button class="close-btn" id="close-lightbox">
            <i class="fas fa-times"></i>
        </button>
        <button class="nav-btn prev-btn" id="prev-img">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="nav-btn next-btn" id="next-img">
            <i class="fas fa-chevron-right"></i>
        </button>
        
        <div class="lightbox-content">
            <img class="lightbox-img" id="lightbox-image" src="" alt="">
            <div class="lightbox-info">
                <h3 class="lightbox-title" id="lightbox-title"></h3>
                <p class="lightbox-desc" id="lightbox-desc"></p>
            </div>
        </div>
    </div>

    <script>
        // BASE DE DONNÉES D'IMAGES
        // chatgpt vas gerer le texte a mettre
        const galleryData = {
            all: [],
            // category Restaurant
            Restaurant: [
                {
                    id: 1,
                    src: "C:/Users/HP/Desktop/site_pgc.ci/images/Nos_espaces/b1.jpg",
                    title: 'titre',
                    desc: 'entrez ici la description de : l\'image',
                    category: 'Restaurant'
                },
                {
                    id: 2,
                    src: "C:/Users/HP/Desktop/site_pgc.ci/images/sr.jpg",
                    title: 'titre',
                    desc: 'entrez ici la description de l\'image',
                    category: 'Restaurant'
                },
                {
                    id: 3,
                    src: "C:/Users/HP/Desktop/site_pgc.ci/images/5.jpg",
                    title: 'titre',
                    desc: 'entrez ici la description de l\'image',
                    category: 'Restaurant'
                },
                {
                    id: 4,
                    src: "C:/Users/HP/Desktop/site_pgc.ci/images/sal-pol.jpg",
                    title: 'titre',
                    desc: 'entrez ici la description de l\'image',
                    category: 'Restaurant'
                }
            ],
            // category Bar
            Bar: [
                {
                    id: 5,
                    src: "C:/Users/HP/Desktop/site_pgc.ci/images/Acc_bar.jpg",
                    title: 'titre',
                    desc: 'entrez ici la description de l\'image',
                    category: 'Bar'
                },
                {
                    id: 6,
                    src: "C:/Users/HP/Desktop/site_pgc.ci/images/sal-pol.jpg",
                    title: 'titre',
                    desc: 'entrez ici la description de l\'image',
                    category: 'Bar'
                },
                {
                    id: 7,
                    src: "C:/Users/HP/Desktop/site_pgc.ci/images/3.jpg",
                    title: 'titre',
                    desc: 'entrez ici la description de l\'image',
                    category: 'Bar'
                }
            ],
            // category sport
            sport: [
                {
                    id: 8,
                    src: "C:/Users/HP/Desktop/site_pgc.ci/images/fitness.jpg",
                    title: 'titre',
                    desc: 'entrez ici la description',
                    category: 'sport'
                },
                {
                    id: 9,
                    src: "C:/Users/HP/Desktop/site_pgc.ci/images/2.jpg",
                    title: 'titre',
                    desc: 'entrez ici la description de l\'image',
                    category: 'sport'
                },
                {
                    id: 10,
                    src: "C:/Users/HP/Desktop/site_pgc.ci/images/1.jpg",
                    title: 'titre',
                    desc: 'entrez ici la description de l\'image',
                    category: 'sport'
                }
            ],
            // category reunion
            reunion: [
                {
                    id: 11,
                    src: "C:/Users/HP/Desktop/site_pgc.ci/images/sr.jpg",
                    title: 'titre',
                    desc: 'entrez ici la description de l\'image',
                    category: 'reunion'
                },
                {
                    id: 12,
                    src: "C:/Users/HP/Desktop/site_pgc.ci/images/Nos_espaces/Salle_R.jpg",
                    title: 'titre',
                    desc: 'Green & Fairways',
                    category: 'reunion'
                }
            ],
            // category golf
            Golf: [
                {
                    id: 13,
                    src: "C:/Users/HP/Desktop/site_pgc.ci/images/balle.jpeg",
                    title: 'titre',
                    desc: 'entrez ici la description de l\'image',
                    category: 'GOlf'
                },
                {
                    id: 14,
                    src: "C:/Users/HP/Desktop/site_pgc.ci/images/slide-acad/bg1.jpeg",
                    title: 'titre',
                    desc: 'entrez ici la description de l\'image',
                    category: 'Golf'
                }
            ],
            // category piscine
            piscine: [
                {
                    id: 15,
                    src: "C:/Users/HP/Desktop/site_pgc.ci/images/Nos_espaces/piscine.jpg",
                    title: 'titre',
                    desc: 'entrez ici la description de l\'image',
                    category: 'piscine'
                },
                {
                    id: 16,
                    src: "C:/Users/HP/Desktop/site_pgc.ci/images/pisc1.jpg",
                    title: 'titre',
                    desc: 'entrez ici la description de l\'image',
                    category: 'piscine'
                }
            ],
            // category fitness
            fitness: [
                {
                    id: 17,
                    src: "C:/Users/HP/Desktop/site_pgc.ci/images/fitness.jpg",
                    title: 'titre',
                    desc: 'entrez ici la description de l\'image',
                    category: 'fitness'
                },
                {
                    id: 18,
                    src: "C:/Users/HP/Desktop/site_pgc.ci/images/2.jpg",
                    title: 'titre',
                    desc: 'entrez ici la description de l\'image',
                    category: 'fitness'
                }
                ],
            // category traiteur
            traiteur: [
                {
                    id: 19,
                    src: "#",
                    title: 'titre',
                    desc: 'entrez ici la description de l\'image',
                    category: 'traiteur'
                },
                {
                    id: 20,
                    src: "#",
                    title: 'titre',
                    desc: 'entrez ici la description de l\'image',
                    category: 'traiteur'
                }
                ]
        };
        

        // Combiner toutes les images
        galleryData.all = [
            ...galleryData.Restaurant,
            ...galleryData.Bar,
            ...galleryData.sport,
            ...galleryData.reunion,
            ...galleryData.Golf,
            ...galleryData.piscine,
            ...galleryData.fitness,
            ...galleryData.traiteur
        ];

        // ÉLÉMENTS DOM
        const galleryGrid = document.getElementById('gallery-grid');
        const thumbnails = document.getElementById('thumbnails');
        const playlistBtns = document.querySelectorAll('.playlist-btn');
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightbox-image');
        const lightboxTitle = document.getElementById('lightbox-title');
        const lightboxDesc = document.getElementById('lightbox-desc');
        const closeLightbox = document.getElementById('close-lightbox');
        const prevBtn = document.getElementById('prev-img');
        const nextBtn = document.getElementById('next-img');
        const currentCount = document.getElementById('current-count');
        const totalCount = document.getElementById('total-count');

        let currentCategory = 'all';
        let currentImages = [];
        let currentIndex = 0;

        // INITIALISATION
        function initGallery() {
            currentImages = galleryData.all;
            renderGallery(currentImages);
            renderThumbnails(currentImages);
            updateCounter(currentImages.length, galleryData.all.length);
        }

        // RENDRE LA GALERIE
        function renderGallery(images) {
            galleryGrid.innerHTML = '';
            
            images.forEach((img, index) => {
                const item = document.createElement('div');
                item.className = 'gallery-item';
                item.dataset.index = index;
                
                item.innerHTML = `
                    <img src="${img.src}" alt="${img.title}" loading="lazy">
                    <div class="image-overlay">
                        <h4 class="image-title">${img.title}</h4>
                        <p class="image-desc">${img.desc}</p>
                    </div>
                `;
                
                item.addEventListener('click', () => openLightbox(index, images));
                galleryGrid.appendChild(item);
            });
        }

        // RENDRE LES MINIATURES
        function renderThumbnails(images) {
            thumbnails.innerHTML = '';
            
            images.forEach((img, index) => {
                const thumb = document.createElement('div');
                thumb.className = 'thumbnail';
                thumb.dataset.index = index;
                
                thumb.innerHTML = `<img src="${img.src}" alt="${img.title}">`;
                
                thumb.addEventListener('click', () => {
                    openLightbox(index, images);
                    // Scroll la miniature en vue
                    thumb.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
                });
                
                thumbnails.appendChild(thumb);
            });
        }

        // METTRE À JOUR LE COMPTEUR
        function updateCounter(current, total) {
            currentCount.textContent = current;
            totalCount.textContent = total;
        }

        // OUVRIRE LA LIGHTBOX
        function openLightbox(index, images) {
            currentIndex = index;
            currentImages = images;
            updateLightbox();
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
            
            // Mettre à jour les miniatures actives
            document.querySelectorAll('.thumbnail').forEach((thumb, i) => {
                thumb.classList.toggle('active', i === index);
            });
        }

        // METTRE À JOUR LA LIGHTBOX
        function updateLightbox() {
            const img = currentImages[currentIndex];
            lightboxImage.src = img.src;
            lightboxTitle.textContent = img.title;
            lightboxDesc.textContent = img.desc;
            
            // Mettre à jour les miniatures
            document.querySelectorAll('.thumbnail').forEach((thumb, i) => {
                thumb.classList.toggle('active', i === currentIndex);
            });
        }

        // FILTRER PAR CATÉGORIE
        playlistBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Mettre à jour les boutons actifs
                playlistBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                // Filtrer les images
                currentCategory = btn.dataset.category;
                const filteredImages = currentCategory === 'all' 
                    ? galleryData.all 
                    : galleryData[currentCategory];
                
                currentImages = filteredImages;
                renderGallery(filteredImages);
                renderThumbnails(filteredImages);
                updateCounter(filteredImages.length, galleryData.all.length);
                
                // Remonter en haut
                galleryGrid.scrollIntoView({ behavior: 'smooth' });
            });
        });

        // NAVIGATION LIGHTBOX
        function nextImage() {
            currentIndex = (currentIndex + 1) % currentImages.length;
            updateLightbox();
        }

        function prevImage() {
            currentIndex = (currentIndex - 1 + currentImages.length) % currentImages.length;
            updateLightbox();
        }

        // ÉVÉNEMENTS CLAVIER
        document.addEventListener('keydown', (e) => {
            if (!lightbox.classList.contains('active')) return;
            
            if (e.key === 'Escape') closeLightbox.click();
            if (e.key === 'ArrowRight') nextImage();
            if (e.key === 'ArrowLeft') prevImage();
        });

        // ÉVÉNEMENTS
        closeLightbox.addEventListener('click', () => {
            lightbox.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        prevBtn.addEventListener('click', prevImage);
        nextBtn.addEventListener('click', nextImage);

        // DÉMARRER LA GALERIE
        initGallery();

        // CHANGEMENT AUTOMATIQUE DE PLAYLIST (OPTIONNEL)
        let autoPlayInterval;
        function startAutoPlay() {
            autoPlayInterval = setInterval(() => {
                const categories = ['all', 'Restaurant', 'Bar', 'sport', 'reunion', 'Golf','piscine','fitness','traiteur'];
                let currentIndex = categories.indexOf(currentCategory);
                let nextIndex = (currentIndex + 1) % categories.length;
                
                // Simuler un clic sur le bouton suivant
                const nextBtn = document.querySelector(`[data-category="${categories[nextIndex]}"]`);
                if (nextBtn) nextBtn.click();
            }, 8000); // Change toutes les 8 secondes
        }

        // Démarrer l'autoplay après 3 secondes
        setTimeout(startAutoPlay, 3000);

        // Arrêter l'autoplay au survol
        galleryGrid.addEventListener('mouseenter', () => clearInterval(autoPlayInterval));
        galleryGrid.addEventListener('mouseleave', startAutoPlay);
    </script>
</body>
</html>