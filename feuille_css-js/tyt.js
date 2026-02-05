// Attendre que le DOM soit chargé
document.addEventListener('DOMContentLoaded', function() {
    // Éléments du DOM
    const menuCards = document.querySelectorAll('.menu-card');
    const menuImages = document.querySelectorAll('.menu-image');
    const prevMenuBtn = document.querySelector('.prev-menu-btn');
    const nextMenuBtn = document.querySelector('.next-menu-btn');
    
    // Éléments d'affichage des informations du menu
    const currentMenuTitle = document.getElementById('current-menu-title');
    const currentMenuDescription = document.getElementById('current-menu-description');
    const currentMenuPrice = document.getElementById('current-menu-price');
    const currentMenuElement = document.getElementById('current-menu');
    const totalMenusElement = document.getElementById('total-menus');
    
    // Données des menus (titre, description, prix)
    const menuData = {
        'menu1': {
            title: 'Menu Découverte',
            description: 'Une sélection raffinée pour une première découverte de notre cuisine créative',
            price: '3000 FCFA'
        },
        'menu2': {
            title: 'Menu Saison',
            description: 'Célébration des produits de saison dans leur pleine maturité et saveur',
            price: '4000 FCFA'
        },
        'menu3': {
            title: 'Menu Signature',
            description: 'Les créations emblématiques du chef, reflet de son parcours et talent',
            price: '2000 FCFA'
        },
        'menu4': {
            title: 'Menu Végétal',
            description: 'Exploration des saveurs du règne végétal dans toute leur diversité',
            price: '2000 FCFA'
        },
        'menu5': {
            title: 'Menu Petit-Dej',
            description: 'Un petit-déjeuner généreux pour bien démarrer ',
            price: '1000 FCFA'
        },
        'menu6': {
            title: 'Menu Prestige',
            description: 'Expérience gastronomique ultime avec des produits d\'exception',
            price: '10000 FCFA'
        }
    };
    
    // Variables d'état
    let currentMenuIndex = 0;
    const totalMenus = menuCards.length;
    let isScrolling = false;
    
    // Initialiser le compteur
    totalMenusElement.textContent = totalMenus;
    
    // Fonction pour changer le menu actif
    function setActiveMenu(menuId) {
        // Retirer la classe active de toutes les cartes de menu
        menuCards.forEach(card => {
            card.classList.remove('active');
        });
        
        // Ajouter la classe active à la carte correspondante
        const targetCard = document.querySelector(`.menu-card[data-menu="${menuId}"]`);
        if (targetCard) {
            targetCard.classList.add('active');
            
            // Faire défiler la carte en vue
            targetCard.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        }
        
        // Retirer la classe active de toutes les images
        menuImages.forEach(img => {
            img.classList.remove('active');
        });
        
        // Ajouter la classe active à l'image correspondante
        const targetImage = document.getElementById(menuId);
        if (targetImage) {
            targetImage.classList.add('active');
        }
        
        // Mettre à jour les informations du menu
        if (menuData[menuId]) {
            currentMenuTitle.textContent = menuData[menuId].title;
            currentMenuDescription.textContent = menuData[menuId].description;
            currentMenuPrice.textContent = menuData[menuId].price;
        }
        
        // Mettre à jour l'index et le compteur
        const menuIds = ['menu1', 'menu2', 'menu3', 'menu4', 'menu5', 'menu6'];
        currentMenuIndex = menuIds.indexOf(menuId);
        currentMenuElement.textContent = currentMenuIndex + 1;
    }
    
    // Fonction pour passer au menu suivant
    function nextMenu() {
        currentMenuIndex = (currentMenuIndex + 1) % totalMenus;
        const menuIds = ['menu1', 'menu2', 'menu3', 'menu4', 'menu5', 'menu6'];
        setActiveMenu(menuIds[currentMenuIndex]);
    }
    
    // Fonction pour passer au menu précédent
    function prevMenu() {
        currentMenuIndex = (currentMenuIndex - 1 + totalMenus) % totalMenus;
        const menuIds = ['menu1', 'menu2', 'menu3', 'menu4', 'menu5', 'menu6'];
        setActiveMenu(menuIds[currentMenuIndex]);
    }
    
    // Événements pour les cartes de menu
    menuCards.forEach(card => {
        // Clic sur une carte de menu
        card.addEventListener('click', function() {
            const menuId = this.dataset.menu;
            setActiveMenu(menuId);
        });
        
        // Hover sur une carte de menu
        card.addEventListener('mouseenter', function() {
            if (!this.classList.contains('active') && !isScrolling) {
                const menuId = this.dataset.menu;
                // Précharger l'image au survol
                const targetImage = document.getElementById(menuId);
                if (targetImage && !targetImage.classList.contains('active')) {
                    targetImage.style.opacity = '0.5';
                }
            }
        });
        
        card.addEventListener('mouseleave', function() {
            const menuId = this.dataset.menu;
            const targetImage = document.getElementById(menuId);
            if (targetImage && !targetImage.classList.contains('active')) {
                targetImage.style.opacity = '0';
            }
        });
    });
    
    // Événements pour les boutons de navigation
    prevMenuBtn.addEventListener('click', prevMenu);
    nextMenuBtn.addEventListener('click', nextMenu);
    
    // Navigation au clavier
    document.addEventListener('keydown', function(event) {
        if (event.key === 'ArrowLeft') {
            prevMenu();
        } else if (event.key === 'ArrowRight') {
            nextMenu();
        }
    });
    
    // Détection du scroll pour changer le menu actif
    const menuContainer = document.querySelector('.menus-scroll');
    let scrollTimeout;
    
    menuContainer.addEventListener('scroll', function() {
        if (!isScrolling) {
            isScrolling = true;
        }
        
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(function() {
            isScrolling = false;
            
            // Trouver la carte la plus visible
            const cards = Array.from(menuCards);
            const containerRect = menuContainer.getBoundingClientRect();
            const containerCenter = containerRect.top + containerRect.height / 2;
            
            let closestCard = null;
            let closestDistance = Infinity;
            
            cards.forEach(card => {
                const cardRect = card.getBoundingClientRect();
                const cardCenter = cardRect.top + cardRect.height / 2;
                const distance = Math.abs(cardCenter - containerCenter);
                
                if (distance < closestDistance) {
                    closestDistance = distance;
                    closestCard = card;
                }
            });
            
            if (closestCard && closestDistance < 200) {
                const menuId = closestCard.dataset.menu;
                if (!closestCard.classList.contains('active')) {
                    setActiveMenu(menuId);
                }
            }
        }, 150);
    });
    
    // Initialisation
    setActiveMenu('menu1');
    
    // Auto-navigation optionnelle (désactivée par défaut)
    /*
    let autoNavInterval = setInterval(nextMenu, 8000);
    
    // Arrêter l'auto-navigation lors d'une interaction
    function resetAutoNav() {
        clearInterval(autoNavInterval);
        autoNavInterval = setInterval(nextMenu, 8000);
    }
    
    menuCards.forEach(card => {
        card.addEventListener('click', resetAutoNav);
    });
    
    prevMenuBtn.addEventListener('click', resetAutoNav);
    nextMenuBtn.addEventListener('click', resetAutoNav);
    
    menuContainer.addEventListener('scroll', resetAutoNav);
    */
    
    // Animation au chargement
    window.addEventListener('load', function() {
        document.body.style.opacity = '0';
        document.body.style.transition = 'opacity 0.5s ease';
        
        setTimeout(function() {
            document.body.style.opacity = '1';
        }, 100);
    });
});