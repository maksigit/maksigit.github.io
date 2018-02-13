$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    dots: true,
    nav: false,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            dots: true
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});