$('.menu-hide').on('click', function () {
    $('.nav-menu').toggleClass('to-show');
    $('.fa-bars').toggleClass('fa-times');
    $('.fa-times').toggleClass('fa-bars');
});

$('.close-nav').on('click', function () {
    $('.nav-menu').toggleClass('to-show');
});