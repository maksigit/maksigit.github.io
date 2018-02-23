$('.mobile-menu').on('click', function () {
    $('.mobile-menu__list').show();
});

$('.mobile-menu__item-close, .mobile-menu__link').on('click', function () {
    $('.mobile-menu__list').hide();
});