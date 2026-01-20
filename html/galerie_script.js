// Liste des vidéos
const videosList = [
    {
        video: "/storage/emulated/0/Download/grok_video_2026-01-12-16-01-29.mp4",
        title: '3D helicopter animation'
    },
    {
        video: 'images/vid-3.mp4',
        title: 'emoji falling animation'
    },
    {
        video: 'images/vid-1.mp4',
        title: 'house flood animation'
    },
    {
        video: 'images/vid-2.mp4',
        title: 'zoombie walking animation'
    },
    {
        video: 'images/vid-4.mp4',
        title: '3D town animation'
    },
    {
        video: 'images/vid-5.mp4',
        title: 'man chasing carrot animation'
    },
    {
        video: '/storage/emulated/0/Download/grok_video_2026-01-12-16-01-29.mp4',
        title: 'door hinge animation'
    },
    {
        video: 'images/vid-7.mp4',
        title: 'poeple walking in town animation'
    },
    {
        video: 'images/vid-8.mp4',
        title: 'knight chasing virus animation'
    },
];

// Fonction pour afficher la liste des vidéos
function displayVideoList() {
    const videosListElement = document.getElementById('videosList');
    
    // Vider le conteneur
    videosListElement.innerHTML = '';
    
    // Ajouter chaque vidéo à la liste
    videosList.forEach((item, index) => {
        const videoItem = document.createElement('div');
        videoItem.className = 'list';
        videoItem.dataset.index = index;
        
        videoItem.innerHTML = `
            <video src="${item.video}" class="list-video"></video>
            <h3 class="list-title">${item.title}</h3>
        `;
        
        videosListElement.appendChild(videoItem);
    });
    
    // Ajouter les événements de clic
    setupVideoClickEvents();
    
    // Sélectionner la première vidéo par défaut
    if (videosListElement.children.length > 0) {
        videosListElement.children[0].classList.add('active');
    }
}

// Fonction pour gérer les clics sur les vidéos
function setupVideoClickEvents() {
    const videoItems = document.querySelectorAll('.list');
    const mainVideo = document.querySelector('.main-video');
    const mainVideoTitle = document.querySelector('.main-vid-title');
    
    videoItems.forEach(item => {
        item.addEventListener('click', () => {
            // Retirer la classe active de tous les éléments
            videoItems.forEach(vid => vid.classList.remove('active'));
            
            // Ajouter la classe active à l'élément cliqué
            item.classList.add('active');
            
            // Récupérer l'index de la vidéo
            const index = parseInt(item.dataset.index);
            
            // Mettre à jour la vidéo principale
            if (index >= 0 && index < videosList.length) {
                const selectedVideo = videosList[index];
                
                // Sauvegarder l'état de lecture actuel
                const wasPlaying = !mainVideo.paused;
                const currentTime = mainVideo.currentTime;
                
                // Changer la source de la vidéo
                mainVideo.src = selectedVideo.video;
                mainVideoTitle.textContent = selectedVideo.title;
                
                // Reprendre la lecture si la vidéo précédente était en lecture
                if (wasPlaying) {
                    mainVideo.play().catch(e => console.log("Erreur de lecture:", e));
                }
                
                // Réinitialiser le temps si ce n'est pas la même vidéo
                if (mainVideo.src !== selectedVideo.video) {
                    mainVideo.currentTime = 0;
                }
            }
        });
    });
}

// Initialiser la galerie vidéo quand la page est chargée
document.addEventListener('DOMContentLoaded', () => {
    displayVideoList();
    
    // Sélectionner automatiquement la première vidéo qui correspond à la vidéo principale
    const mainVideoSrc = document.querySelector('.main-video').src;
    const videoItems = document.querySelectorAll('.list');
    
    videoItems.forEach((item, index) => {
        const videoSrc = videosList[index].video;
        // Comparer les chemins pour trouver la correspondance
        if (mainVideoSrc.includes(videoSrc.split('/').pop()) || 
            videoSrc.includes(mainVideoSrc.split('/').pop())) {
            item.classList.add('active');
        }
    });
});