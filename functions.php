<?php

// add_theme_support( 'align-wide' );

// Include custom navwalker
require_once('bs4navwalker.php');
require_once('bs4navwalkerF.php');

// Register WordPress nav menu
function register_my_menus() {
  register_nav_menus(
    array(
      'top-menu' => __( 'Top Menu' ),
      'footer-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

//stylesheets
function styles()
{
    // Register the style for a theme:
    wp_register_style( 'hamburgers.min', get_template_directory_uri() . '/assets/css/hamburgers.min.css', array(), '1.1', 'all' );
    wp_register_style( 'animate.min', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.1', 'all' );
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all' );
    wp_register_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all' );
 
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'hamburgers.min' );
    wp_enqueue_style( 'animate.min' );
    wp_enqueue_style( 'bootstrap.min' );
    wp_enqueue_style( 'style' );

}
add_action( 'wp_enqueue_scripts', 'styles' );

//javascript
function script()
{
    // Register the script for a theme:
    //jQuery first, then Popper.js, then Bootstrap JS
    wp_register_script( 'jquery-3.3.1.min', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array( 'jquery', 'jquery-ui-core' ), 1.1, true );
    wp_register_script( 'popper.min', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery', 'jquery-ui-core' ), 1.1, true );
    wp_register_script( 'bootstrap.bundle.min', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery', 'jquery-ui-core' ), 1.1, true );
    wp_register_script( 'zenscroll-min', get_template_directory_uri() . '/assets/js/zenscroll-min.js', array( 'jquery', 'jquery-ui-core' ), 1.1, true );
    wp_register_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery', 'jquery-ui-core' ), 1.1, true );
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'jquery-3.3.1.min' );
    wp_enqueue_script( 'popper.min' );
    wp_enqueue_script( 'bootstrap.bundle.min' );
    wp_enqueue_script( 'zenscroll-min' );
    wp_enqueue_script( 'script' );

}
add_action( 'wp_enqueue_scripts', 'script' );

//register sidebars
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary-left',
            'name'          => __( 'Left Primary Sidebar' ),
            'description'   => __( 'The left primary sidebar for the theme.' ),
            'before_widget' => '<div id="%1$s" class="widget margin-top-100 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
            )
        );
    register_sidebar(
        array(
            'id'            => 'primary-right',
            'name'          => __( 'Right Primary Sidebar' ),
            'description'   => __( 'The right primary sidebar for the theme.' ),
            'before_widget' => '<div id="%1$s" class="widget margin-top-100 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
            )
        );
    register_sidebar(
        array(
            'id'            => 'footer-left',
            'name'          => __( 'Left Footer Sidebar' ),
            'description'   => __( 'The left footer sidebar for the theme.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title text-center">',
        'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'footer-right',
            'name'          => __( 'Right Footer Sidebar' ),
            'description'   => __( 'The right footer sidebar for the theme.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title text-center">',
            'after_title'   => '</h3>',
            )
        );
    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'my_register_sidebars' );

?>