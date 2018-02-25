<?php
  function cr_customize_register($cr_customize){
    // Showcase Section
    $cr_customize->add_section('showcase', array(
      'title'   => __('Showcase', 'cr12_tanja_kosic_traveler'),
      'description' => sprintf(__('Options for showcase','cr12_tanja_kosic_traveler')),
      'priority'    => 130
    ));

    $cr_customize->add_setting('showcase_image', array(
      'default'   => get_bloginfo('template_directory').'/img/showcase.jpg',
      'type'      => 'theme_mod'
    ));

    $cr_customize->add_control(new WP_Customize_Image_Control($cr_customize, 'showcase_image', array(
      'label'   => __('Showcase Image', 'cr12_tanja_kosic_traveler'),
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority'  => 1
    )));


    $cr_customize->add_setting('showcase_heading', array(
      'default'   => _x('Mount Everest', 'cr12_tanja_kosic_traveler'),
      'type'      => 'theme_mod'
    ));

    $cr_customize->add_control('showcase_heading', array(
      'label'   => __('Heading', 'cr12_tanja_kosic_traveler'),
      'section' => 'showcase',
      'priority'  => 2
    ));

    $cr_customize->add_setting('showcase_text', array(
      'default'   => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'cr12_tanja_kosic_traveler'),
      'type'      => 'theme_mod'
    ));

    $cr_customize->add_control('showcase_text', array(
      'label'   => __('Text', 'cr12_tanja_kosic_traveler'),
      'section' => 'showcase',
      'priority'  => 3
    ));

    $cr_customize->add_setting('btn_url', array(
      'default'   => _x('#', 'cr12_tanja_kosic_traveler'),
      'type'      => 'theme_mod'
    ));

    $cr_customize->add_control('btn_url', array(
      'label'   => __('Button URL', 'cr12_tanja_kosic_traveler'),
      'section' => 'showcase',
      'priority'  => 4
    ));

    $cr_customize->add_setting('btn_text', array(
      'default'   => _x('Read More', 'cr12_tanja_kosic_traveler'),
      'type'      => 'theme_mod'
    ));

    $cr_customize->add_control('btn_text', array(
      'label'   => __('Button Text', 'cr12_tanja_kosic_traveler'),
      'section' => 'showcase',
      'priority'  => 5
    ));
  }

  add_action('customize_register', 'cr_customize_register');
