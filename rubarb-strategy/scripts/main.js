$(document).ready(function () {

// INIT PARALLAX

    $(function(){
        $('.parallax__layer').parallax({
            mouseport: $('.banner-right-col'),
        });
    });

    // Animations on scroll
    var $animation_elements = $('.main-triangle-one, .main-triangle, .animation, .animation-left, .animation-right, .animation-1, .animation-2, .animation-3, .animation-4, .animation-5, .animation-left-1, .animation-left-2, .animation-left-3, .animation-left-4, .animation-left-5, .animation-left-6, .animation-left-7, .animation-left-8, .animation-left-9, .animation-left-10, .animation-left-11');
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);
        $.each($animation_elements, function () {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);
            //check to see if this current container is within viewport
            if ((element_bottom_position >= window_top_position) &&
                (element_top_position - 100 <= window_bottom_position)) {
                $element.addClass('in-view');
            } else {
                // $element.removeClass('in-view');
            }
        });
    }

    // FIX HEADER

    function fixed_header() {
        var $main_header = $('.header-bottom');

        if ($window.scrollTop() !== 0) {
            $main_header.addClass('header-bottom__fixed');
        } else {
            $main_header.removeClass('header-bottom__fixed');
        }
    }

    if ($(window).width() > 319) {
        check_if_in_view();
        $window.on('scroll resize', check_if_in_view);
        $window.on('scroll resize', fixed_header);
        $window.trigger('scroll');
    }

    // PARALLAX BLOCK

    $('.card').transformHeroes();
});
