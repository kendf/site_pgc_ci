const reveals = document.querySelectorAll(".reveal");

function revealOnScroll() {
    reveals.forEach(el => {
        const windowHeight = window.innerHeight;
        const elementTop = el.getBoundingClientRect().top;

        if (elementTop < windowHeight - 100) {
            el.classList.add("active");
        }
    });
}

window.addEventListener("scroll", revealOnScroll);
revealOnScroll();
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
  document.addEventListener('DOMContentLoaded', function () {
    var myCarousel = document.querySelector('#backgroundCarousel');
    var carousel = new bootstrap.Carousel(myCarousel, {
      interval: 3000, // 3 secondes
      ride: 'carousel'
    });
  });
  document.addEventListener('DOMContentLoaded', function () {
  var myCarousel = document.querySelector('#backgroundCarousel');
  console.log("Carrousel trouvé :", myCarousel);

  if (myCarousel) {
    var carousel = new bootstrap.Carousel(myCarousel, {
      interval: 3000
    });
    console.log("Carrousel initialisé !");
  } else {
    console.error("Carrousel introuvable !");
  }
});

