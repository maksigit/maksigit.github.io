$('.gamburger').on('click', function () {
    $('.wrap-menu').slideToggle();
});

$('.btn.try').on('click', function () {
    $('.wrap-form-header').addClass('active-form');
});

$('.close').on('click', function () {

    $('.wrap-form-header').removeClass('active-form');
});

// $(document).on('click', '.wrap-form-header', function (e) {
//     var clickedEl = e.target.className;
//
//     if(clickedEl == 'wrap-form-header active-form') {
//         $(e.target).removeClass('active-form');
//     }
// });


