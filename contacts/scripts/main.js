//mobile-menu
$('.mobile-menu').on('click', function () {
    $('.wrap-menu').slideToggle();
});

// owl-slider
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    navText: ["<", ">"],
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 1,
            nav: true
        },
        1000: {
            items: 1,
            nav: true,
            loop: false
        }
    }
})