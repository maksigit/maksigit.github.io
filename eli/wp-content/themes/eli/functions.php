<?php


add_action('wp_enqueue_scripts', 'eli_add_scripts');
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний

add_action('after_setup_theme', function () {
    register_nav_menus(array(
        'header_menu' => 'Menu in header',
        'footer_menu' => 'Menu in footer'
    ));

    register_sidebar(array(
        'name' => "Правая боковая панель сайта",
        'id' => 'right-sidebar',
        'description' => 'Эти виджеты будут показаны с правой колонке сайта'
    ));
    register_sidebar(array(
        'name' => "footer-sidebar-contact-us",
        'id' => 'footer-sidebar-contact-us',
        'description' => 'Эти виджеты будут показаны в футере',
        'before_widget' => ' '
    ));

    register_sidebar(array(
        'name' => "footer-sidebar-quick-links:",
        'id' => 'footer-sidebar-quick-links:',
        'description' => 'Эти виджеты будут показаны в футере',
        'before_widget' => ' '
    ));

    register_sidebar(array(
        'name' => "footer-sidebar-information",
        'id' => 'footer-sidebar-information',
        'description' => 'Эти виджеты будут показаны в футере',
        'before_widget' => ' '
    ));
});


function eli_add_scripts()
{
    wp_enqueue_style('style-normalize', get_template_directory_uri() . '/styles/normalize.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/styles/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('style-main', get_stylesheet_uri());
    wp_enqueue_script('my-gamburger', get_template_directory_uri() . '/scripts/gamburger.js', array('jquery'));
}

//миниатюры

add_theme_support('post-thumbnails');
add_theme_support('custom-logo');





