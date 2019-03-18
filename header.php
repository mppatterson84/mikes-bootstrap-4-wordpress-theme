<!doctype html>
<html lang="en">
    
<head>

    <meta name="description" content="A description of the page." />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
    <style>
      .jumbotron-image{
        background:url(<?php echo get_theme_mod('jumbotron_image', get_bloginfo('template_url').'/assets/images/jumbotron.jpg'); ?>) no-repeat center center;
      }
    </style>
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