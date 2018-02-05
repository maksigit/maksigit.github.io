$('.mobile-menu').on('click', function () {
    $('.main-menu').css('right', '0');
    $('.main-menu li').css('display', 'block')
});
$('.close-mobile-menu').on('click', function () {
    $('.main-menu').css('right', '100%');
    $('.main-menu li').css('display', 'none')
});

$('.open-all').on('click', function () {
    $(this).siblings().toggleClass('disp-flex');
})