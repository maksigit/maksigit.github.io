$('.gamburger').on('click', function () {
    $('.wrap-menu').slideToggle();
});

$('.btn.try').on('click', function () {
    $('.wrap-form-header').addClass('active-form');
});

$('.close').on('click', function () {

    $('.wrap-form-header').removeClass('active-form');
});

$('.hide').on('click', function () {
    $('.hide').removeClass('active');
    $(this).addClass('active');
});

if ($(window).width() < 770) {
    $('.hide').on('click', function () {
        $('.wrap-menu').slideToggle();
    });
}


