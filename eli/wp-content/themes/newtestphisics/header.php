<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Halant" rel="stylesheet">
    <title><?php bloginfo('name');?></title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="header-top">
        <div class="container">
            <div class="logo-img">
                <a href="#"><?php the_custom_logo(); ?></a>
            </div>
            <div class="search-form"><?php get_search_form(); ?></div>
            <div class="wrap-login">
                <ul>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Sign in</a></li>
                    <li><a href="#">Join as Psychic</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <?php
            wp_nav_menu( array(
                'theme_location'=>'header_menu'
            ) );
            ?>
        </div>
    </div>

</header>


