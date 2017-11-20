<?php


add_action( 'wp_enqueue_scripts', 'ntp_add_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний

add_action('after_setup_theme', function(){
    register_nav_menus( array(
        'header_menu' => 'Menu in header',
        'footer_menu' => 'Menu in footer'
    ) );
});


function ntp_add_scripts() {
    wp_enqueue_style( 'style-normalize', get_template_directory_uri() . '/styles/normalize.css' );
    wp_enqueue_style( 'style-main', get_stylesheet_uri()  );
}

//миниатюры

add_theme_support('post-thumbnails');
add_theme_support('custom-logo');





