<?php

function nv_layout_customizer($wp_customize)
{
  /* SETTINGS */
  $wp_customize->add_setting('nv_topmenu_show', array('default' => 1));
  $wp_customize->add_setting('nv_search_show', array('default' => 1));
  $wp_customize->add_setting('nv_privacy_url', array('default' => ''));

  /* SECTIONS */
  $wp_customize->add_section('nv_layout_section', array(
    'title' => 'Opções de Layout',
    'priority' => 2,
  ));

  /* CONTROLLERS */
  // Show Top Menu
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'nv_topmenu_show',
      array(
        'label' => 'Mostrar Menu Superior',
        'section' => 'nv_layout_section',
        'settings' => 'nv_topmenu_show',
        /**
         * TYPES BASICS
         * 
         * These include: text, checkbox, textarea, radio, select and dropdown-pages.
         * Later versions of WordPress also introduced: Color, Media, Image and Cropped Image controls.
         * Text input controls can also be replaced with more specific inputs by specifying email, url, number, hidden, or date, instead of text.
         */
        'type' => 'checkbox',
        'choices' => array(
          'yes' => 'Sim',
        ),
      )
    )
  );

  // Show Search Form
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'nv_search_show',
      array(
        'label' => 'Mostrar Formulário de Pesquisa',
        'section' => 'nv_layout_section',
        'settings' => 'nv_search_show',
        'type' => 'checkbox',
        'choices' => array(
          'yes' => 'Sim',
        ),
      )
    )
  );

  // Show Search Form
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'nv_privacy_url',
      array(
        'label' => 'Política de Privacidade',
        'section' => 'nv_layout_section',
        'settings' => 'nv_privacy_url',
        'type' => 'dropdown-pages',
      )
    )
  );
}
