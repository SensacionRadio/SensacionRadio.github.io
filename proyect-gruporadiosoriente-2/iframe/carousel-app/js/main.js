document.addEventListener('DOMContentLoaded', () => {
    const elementosCarousel = document.querySelectorAll('.carousel');
    M.Carousel.init(elementosCarousel, {
        duration: 10,
        dist: -50,
        shift: 5,
        padding: -70,
        numVisible: 6,
        indicator: true,
        noWrap: false
    });
});