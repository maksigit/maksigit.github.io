$( document ).ready(function() {
    $('.wrap-order-pop-up').hide();

    $('.button-send').on('click', function () {
        $('.wrap-order-pop-up').show();
    });

    $('.close-pop').on('click', function () {
        $('.wrap-order-pop-up').hide();
    });
});

