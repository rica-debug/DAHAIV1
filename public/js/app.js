// Configuración de Swiper
document.addEventListener('DOMContentLoaded', function() {
    // Swiper para el carrusel
    const swiper = new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 20
            }
        }
    });
});

// Otras inicializaciones globales