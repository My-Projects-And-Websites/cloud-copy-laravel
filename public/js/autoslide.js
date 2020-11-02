const carouselSlide = document.querySelector('.hero-img-slide');
const carouselImages = document.querySelectorAll('.hero-img-slide img');

// Counter
let counter = 1;
const size = carouselImages[0].clientWidth;

carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

setInterval(function() {
    if (counter >= carouselImages.length - 1) {
        counter = 1;
        return;
    }

    carouselSlide.style.transition = "all 1s ease-in-out";
    counter++;
    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

}, 6000); 