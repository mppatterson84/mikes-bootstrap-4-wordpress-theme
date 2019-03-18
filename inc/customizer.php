<?php
  function wp_bs4_customize_register($wp_customize){
    // Navbar Section
    $wp_customize->add_section('navbar', array(
      'title'   => __('Navbar', 'mikes-wp-bs4'),
      'description' => sprintf(__('Options for the Navbar','mikes-wp-bs4')),
      'priority'    => 90
    ));
    $wp_customize->add_setting( 'navbar_brand_display' , array(
      'default'     => 'show',
      'transport'   => 'refresh',
    ));
    $wp_customize->add_control( 'navbar_brand_display', array(
      'label' => 'Site Title Display',
      'section' => 'title_tagline',
      'settings' => 'navbar_brand_display',
      'type' => 'radio',
      'choices' => array(
        'show' => 'Show Site Title',
        'hide' => 'Hide Site Title',
      ),
      'priority'  => 1
    ));
    $wp_customize->add_setting( 'navbar_tagline_display' , array(
      'default'     => 'show',
      'transport'   => 'refresh',
    ));
    $wp_customize->add_control( 'navbar_tagline_display', array(
      'label' => 'Tagline Display',
      'section' => 'title_tagline',
      'settings' => 'navbar_tagline_display',
      'type' => 'radio',
      'choices' => array(
        'show' => 'Show Tagline',
        'hide' => 'Hide Tagline',
      ),
      'priority'  => 2
    ));
    // Jumbotron Section
    $wp_customize->add_section('jumbotron', array(
      'title'   => __('Jumbotron', 'mikes-wp-bs4'),
      'description' => sprintf(__('Options for the Jumbotron','mikes-wp-bs4')),
      'priority'    => 130
    ));
    $wp_customize->add_setting( 'jumbotron_display' , array(
      'default'     => 'show',
      'transport'   => 'refresh',
    ));
    $wp_customize->add_control( 'jumbotron_display', array(
      'label' => 'Jumbotron Display',
      'section' => 'jumbotron',
      'settings' => 'jumbotron_display',
      'type' => 'radio',
      'choices' => array(
        'show' => 'Show Jumbotron',
        'hide' => 'Hide Jumbotron',
      ),
      'priority'  => 1
    ));
    $wp_customize->add_setting('jumbotron_image', array(
      'default'   => 'radial-gradient(rgb(224, 243, 255), rgb(135, 206, 250), rgb(98, 191, 228))',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'jumbotron_image', array(
      'label'   => __('Jumbotron Image', 'mikes-wp-bs4'),
      'section' => 'jumbotron',
      'settings' => 'jumbotron_image',
      'priority'  => 2
    )));
    $wp_customize->add_setting('jumbotron_heading', array(
      'default'   => _x('Bootstrap 4', 'mikes-wp-bs4'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('jumbotron_heading', array(
      'label'   => __('Heading', 'mikes-wp-bs4'),
      'section' => 'jumbotron',
      'priority'  => 3
    ));
    $wp_customize->add_setting('jumbotron_text', array(
      'default'   => _x('Wordpress and Bootstrap 4 theme with a front page jumbotron cover.', 'mikes-wp-bs4'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('jumbotron_text', array(
      'label'   => __('Text', 'mikes-wp-bs4'),
      'section' => 'jumbotron',
      'priority'  => 4
    ));
    $wp_customize->add_setting( 'jumbotron_btn_display' , array(
      'default'     => 'show',
      'transport'   => 'refresh',
    ));
    $wp_customize->add_control( 'jumbotron_btn_display', array(
      'label' => 'Button Display',
      'section' => 'jumbotron',
      'settings' => 'jumbotron_btn_display',
      'type' => 'radio',
      'choices' => array(
        'show' => 'Show Button',
        'hide' => 'Hide Button',
      ),
      'priority'  => 5
    ));
    $wp_customize->add_setting('btn_url', array(
      'default'   => _x('about', 'mikes-wp-bs4'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('btn_url', array(
      'label'   => __('Button URL', 'mikes-wp-bs4'),
      'section' => 'jumbotron',
      'priority'  => 6
    ));
    $wp_customize->add_setting('btn_text', array(
      'default'   => _x('Find Out More', 'mikes-wp-bs4'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('btn_text', array(
      'label'   => __('Button Text', 'mikes-wp-bs4'),
      'section' => 'jumbotron',
      'priority'  => 7
    ));
  }
  add_action('customize_register', 'wp_bs4_customize_register');
