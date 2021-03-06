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
</head>

<body <?php body_class(); ?>>


<?php if( get_theme_mod( 'nav_menu_style', 'style_1' ) == 'style_1' ) : ?>
    <?php get_template_part( 'template-parts/navs/nav1' ); ?>
<?php elseif( get_theme_mod( 'nav_menu_style', 'style_2' ) == 'style_2' ) : ?>
    <?php get_template_part( 'template-parts/navs/nav2' ); ?>
<?php endif ?>