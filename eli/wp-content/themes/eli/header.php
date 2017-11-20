<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>
<body>
<header class="main-header">
    <div class="container">
        <?php the_custom_logo(); ?>
    </div>

    <nav class="wrap-menu ">
        <div class="container">
            <div class="gamburger"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></div>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header_menu'
            ));
            ?>
            <div class="wrap-phone-login space-beetween">
                <div class="phone"><a href=""><i class="fa fa-phone" aria-hidden="true"></i>647.296.6945</a></div>
                <div class="wrap-login space-beetween">
                    <div class="register"><a href="">Register</a></div>
                    <div class="login-in"><a href="">Sign In</a></div>
                </div>
            </div>
        </div>
    </nav>

</header>


