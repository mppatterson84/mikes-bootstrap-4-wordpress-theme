<!doctype html>
<html lang="en">
    
<head>

    <meta name="description" content="A description of the page." />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="./images/favicon.png">

     <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <nav id="mainNavbar" class="navbar navbar-expand-md fixed-top navbar-light nav-pills">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
        <button class="navbar-toggler hamburger hamburger--slider animated rubberBand box-shadow" type="button"
            data-toggle="collapse" data-target="#bs4navbar"
            aria-controls="bs4navbar" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>

        <?php
            wp_nav_menu(
                array(
                    'menu'            => 'top-menu',
                    'theme_location'  => 'top-menu',
                    'container'       => 'div',
                    'container_id'    => 'bs4navbar',
                    'container_class' => 'collapse navbar-collapse',
                    'menu_id'         => 'primary-menu',
                    'menu_class'      => 'navbar-nav ml-auto text-center animated pulse',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 2,
                    'fallback_cb'     => 'bs4navwalker::fallback',
                    'walker'          => new bs4navwalker()
                )
            );
        ?>

    </nav>