<?php

function nv_social_customizer($wp_customize)
{
  /* SETTINGS */
  $wp_customize->add_setting('nv_social_dribbble', array('default' => ''));
  $wp_customize->add_setting('nv_social_facebook', array('default' => ''));
  $wp_customize->add_setting('nv_social_instagram', array('default' => ''));
  $wp_customize->add_setting('nv_social_twitter', array('default' => ''));
  $wp_customize->add_setting('nv_social_youtube', array('default' => ''));

  /* SECTIONS */
  $wp_customize->add_section('nv_social_section', array(
    'title' => 'Redes Sociais',
    'priority' => '1',
    'panel' => 'options_theme',
  ));

  /* CONTRROLLERS */
  // Dribbble
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'nv_social_dribbble',
      array(
        'label' => 'Link do Dribbble',
        'section' => 'nv_social_section',
        'settings' => 'nv_social_dribbble',
        'type' => 'url',
      )
    )
  );

  // Facebook
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'nv_social_facebook',
      array(
        'label' => 'Link do Facebook',
        'section' => 'nv_social_section',
        'settings' => 'nv_social_facebook',
        'type' => 'url',
      )
    )
  );

  // Instagram
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'nv_social_instagram',
      array(
        'label' => 'Link do Instagram',
        'section' => 'nv_social_section',
        'settings' => 'nv_social_instagram',
        'type' => 'url',
      )
    )
  );

  // Twitter
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'nv_social_twitter',
      array(
        'label' => 'Link do Twitter',
        'section' => 'nv_social_section',
        'settings' => 'nv_social_twitter',
        'type' => 'url',
      )
    )
  );

  // Youtube
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'nv_social_youtube',
      array(
        'label' => 'Link do Youtube',
        'section' => 'nv_social_section',
        'settings' => 'nv_social_youtube',
        'type' => 'url',
      )
    )
  );
}
