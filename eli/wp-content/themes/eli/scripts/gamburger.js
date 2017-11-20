jQuery(document).ready(function($){
    $('.gamburger').on('click', function (e) {
        var clickClass = e.target.className;
        console.log(clickClass);
        //$('.menu-header-menu-container').slideToggle();
        // if(clickClass == 'fa fa-bars fa-2x') {
            $('.menu-header-menu-container').toggleClass('to-right');

        // } else if ($(".menu-header-menu-container").hasClass('to-right')) {
        //     $('.menu-header-menu-container').removeClass('to-right');
        // }
    });

    // $('.gamburger').on('click', function (e) {
    //     // var clickClass = e.target;
    //     $('.menu-header-menu-container.to-right').removeClass('to-right');
    // });

});

