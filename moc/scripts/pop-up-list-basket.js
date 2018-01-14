//---------POP UP - OPEN/CLOSE--------------
$('.wrap-list-basket, .add-to-basket').hide();

$('.wrap-basket').on('click', function () {
    $('.wrap-list-basket').show();
    $(openCard());
});

$('.close-list-basket').on('click', function () {
    $('.wrap-list-basket').hide();
});


$('.clear-basket').on('click', function () {
    localStorage.clear();
    $('#list-basket-id').text('В корзине пусто');
    $('.add-to-basket').text('0');
})


