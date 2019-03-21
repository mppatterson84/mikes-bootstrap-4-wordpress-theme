<?php
  function wp_bs4_customize_register($wp_customize){
    // Navbar Section
    $wp_customize->add_section('navbar_menu', array(
      'title'   => __('Navbar Menu', 'mikes-wp-bs4'),
      'description' => sprintf(__('Options for the Navbar','mikes-wp-bs4')),
      'priority'    => 90
    ));
    $wp_customize->add_setting( 'nav_menu_style' , array(
      'default'   => 'style_1',
      'transport' => 'refresh'
    ));
    $wp_customize->add_control( 'nav_menu_style' , array(
      'label' => 'Menu Style Selection',
      'section' => 'navbar_menu',
      'settings' => 'nav_menu_style',
      'type' => 'radio',
      'choices' => array(
        'style_1' => 'Style 1',
        'style_2' => 'Style 2',
      ),
      'priority'  => 1
    ));
    //Site Identity Section
    $wp_customize->add_setting( 'navbar_brand_display' , array(
      'default'     => 'show',
      'transport'   => 'refresh'
    ));
    $wp_customize->add_control( 'navbar_brand_display', array(
      'label' => 'Site Title Display',
      'section' => 'title_tagline',
      'settings' => 'navbar_brand_display',
      'type' => 'radio',
      'choices' => array(
        'show' => 'Show Site Title',
        'hide' => 'Hide Site Title'
      ),
      'priority'  => 1
    ));
    $wp_customize->add_setting( 'navbar_tagline_display' , array(
      'default'     => 'show',
      'transport'   => 'refresh'
    ));
    $wp_customize->add_control( 'navbar_tagline_display', array(
      'label' => 'Tagline Display',
      'section' => 'title_tagline',
      'settings' => 'navbar_tagline_display',
      'type' => 'radio',
      'choices' => array(
        'show' => 'Show Tagline',
        'hide' => 'Hide Tagline'
      ),
      'priority'  => 2
    ));
    // Jumbotron Section
    $wp_customize->add_section('jumbotron', array(
      'title'   => __('Jumbotron', 'mikes-wp-bs4'),
      'description' => sprintf(__('Options for the Jumbotron','mikes-wp-bs4')),
      'priority'    => 130,
      'active_callback' => 'is_front_page'
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
        'hide' => 'Hide Jumbotron'
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
      'priority'  => 2,
      'active_callback' => 'jumbotron_display_callback'
    )));
    $wp_customize->add_setting('jumbotron_heading', array(
      'default'   => _x('Bootstrap 4', 'mikes-wp-bs4'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('jumbotron_heading', array(
      'label'   => __('Heading', 'mikes-wp-bs4'),
      'section' => 'jumbotron',
      'priority'  => 3,
      'active_callback' => 'jumbotron_display_callback'
    ));
    $wp_customize->add_setting('jumbotron_text', array(
      'default'   => _x('Wordpress and Bootstrap 4 theme with a front page jumbotron cover.', 'mikes-wp-bs4'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('jumbotron_text', array(
      'label'   => __('Text', 'mikes-wp-bs4'),
      'section' => 'jumbotron',
      'priority'  => 4,
      'active_callback' => 'jumbotron_display_callback'
    ));
    $wp_customize->add_setting( 'jumbotron_btn_display' , array(
      'default'     => 'show',
      'transport'   => 'refresh'
    ));
    $wp_customize->add_control( 'jumbotron_btn_display', array(
      'label' => 'Button Display',
      'section' => 'jumbotron',
      'settings' => 'jumbotron_btn_display',
      'type' => 'radio',
      'choices' => array(
        'show' => 'Show Button',
        'hide' => 'Hide Button'
      ),
      'priority'  => 5,
      'active_callback' => 'jumbotron_display_callback'
    ));
    $wp_customize->add_setting('btn_url', array(
      'default'   => _x('about', 'mikes-wp-bs4'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('btn_url', array(
      'label'   => __('Button URL', 'mikes-wp-bs4'),
      'section' => 'jumbotron',
      'priority'  => 6,
      'active_callback' => 'jumbotron_display_callback'
    ));
    $wp_customize->add_setting('btn_text', array(
      'default'   => _x('Find Out More', 'mikes-wp-bs4'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('btn_text', array(
      'label'   => __('Button Text', 'mikes-wp-bs4'),
      'section' => 'jumbotron',
      'priority'  => 7,
      'active_callback' => 'jumbotron_display_callback'
    ));
    function jumbotron_display_callback( $control ) {
      if ( $control->manager->get_setting('jumbotron_display')->value() == 'show' ) {
          return true;
      } else {
          return false;
      }
    }
  }
  add_action('customize_register', 'wp_bs4_customize_register');

  add_action( 'wp_head', 'cd_customizer_css');
  function cd_customizer_css(){
    ?>
      <style>
        .jumbotron-image{
          background:url(<?php echo get_theme_mod('jumbotron_image', get_bloginfo('template_url').'/assets/images/jumbotron.jpg'); ?>) no-repeat center center;
        }
      </style>
    <?php
  }