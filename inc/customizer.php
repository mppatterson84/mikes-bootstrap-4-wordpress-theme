<?php
  function wpb_customize_register($wp_customize){
    // Jumbotron Section
    $wp_customize->add_section('jumbotron', array(
      'title'   => __('Jumbotron', 'mikes-wp-bs4'),
      'description' => sprintf(__('Options for jumbotron','mikes-wp-bs4')),
      'priority'    => 130
    ));
    $wp_customize->add_setting('jumbotron_image', array(
      'default'   => 'radial-gradient(rgb(224, 243, 255), rgb(135, 206, 250), rgb(98, 191, 228))',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'jumbotron_image', array(
      'label'   => __('Jumbotron Image', 'mikes-wp-bs4'),
      'section' => 'jumbotron',
      'settings' => 'jumbotron_image',
      'priority'  => 1
    )));
    $wp_customize->add_setting('jumbotron_heading', array(
      'default'   => _x('Bootstrap 4', 'mikes-wp-bs4'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('jumbotron_heading', array(
      'label'   => __('Heading', 'mikes-wp-bs4'),
      'section' => 'jumbotron',
      'priority'  => 2
    ));
    $wp_customize->add_setting('jumbotron_text', array(
      'default'   => _x('Wordpress and Bootstrap 4 theme with a front page jumbotron cover.', 'mikes-wp-bs4'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('jumbotron_text', array(
      'label'   => __('Text', 'mikes-wp-bs4'),
      'section' => 'jumbotron',
      'priority'  => 3
    ));
    $wp_customize->add_setting('btn_url', array(
      'default'   => _x('about', 'mikes-wp-bs4'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('btn_url', array(
      'label'   => __('Button URL', 'mikes-wp-bs4'),
      'section' => 'jumbotron',
      'priority'  => 4
    ));
    $wp_customize->add_setting('btn_text', array(
      'default'   => _x('Find Out More', 'mikes-wp-bs4'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('btn_text', array(
      'label'   => __('Button Text', 'mikes-wp-bs4'),
      'section' => 'jumbotron',
      'priority'  => 5
    ));
  }
  add_action('customize_register', 'wpb_customize_register');
