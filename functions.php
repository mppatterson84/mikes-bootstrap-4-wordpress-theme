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

function custom_styles_hamburgers()
{
    // Register the style for a theme:
    wp_register_style( 'hamburgers.min', get_template_directory_uri() . '/assets/css/hamburgers.min.css', array(), '1.1', 'all' );
 
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'hamburgers.min' );
}
add_action( 'wp_enqueue_scripts', 'custom_styles_hamburgers' );

function style_bootstrap()
{
    // Register the style for a theme:
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all' );
 
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'style_bootstrap' );

function custom_styles_animate()
{
    // Register the style for a theme:
    wp_register_style( 'animate.min', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.1', 'all' );
 
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'animate.min' );
}
add_action( 'wp_enqueue_scripts', 'custom_styles_animate' );

function styles()
{
    // Register the style for a theme:
    wp_register_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all' );
 
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'style' );
}
add_action( 'wp_enqueue_scripts', 'styles' );

//javascript

function script_jq()
{
    // Register the script for a theme:
    wp_register_script( 'jquery-3.3.1.min', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array( 'jquery', 'jquery-ui-core' ), 1.1, true );
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'jquery-3.3.1.min' );
}
add_action( 'wp_enqueue_scripts', 'script_jq' );

function script_zenscroll()
{
    // Register the script for a theme:
    wp_register_script( 'zenscroll-min', get_template_directory_uri() . '/assets/js/zenscroll-min.js', array( 'jquery', 'jquery-ui-core' ), 1.1, true );
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'zenscroll-min' );
}
add_action( 'wp_enqueue_scripts', 'script_zenscroll' );

function script_bootstrap()
{
    // Register the script for a theme:
    wp_register_script( 'bootstrap.bundle.min', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery', 'jquery-ui-core' ), 1.1, true );
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'bootstrap.bundle.min' );
}
add_action( 'wp_enqueue_scripts', 'script_bootstrap' );

function script()
{
    // Register the script for a theme:
    wp_register_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery', 'jquery-ui-core' ), 1.1, true );
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'script' );
}
add_action( 'wp_enqueue_scripts', 'script' );

// <?php
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'The primary sidebar for the theme.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
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
            'before_title'  => '<h3 class="widget-title">',
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
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
?>