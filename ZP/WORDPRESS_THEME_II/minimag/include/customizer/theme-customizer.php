<?php
// Include
require get_template_directory() . '/include/customizer/social.php';
require get_template_directory() . '/include/customizer/layout.php';

// Functions
function nv_customize_register($wp_customize)
{
  // $wp_customize->get_section('title_tagline')->title = 'Informações Principais';
  $wp_customize->get_section('custom_css')->description = '';

  $wp_customize->add_panel('options_theme', array(
    'title' => __('Opções do tema', 'minimage'),
    'priority' => 1,
  ));

  nv_social_customizer($wp_customize);
  nv_layout_customizer($wp_customize);

  // echo '<pre>';
  // print_r($wp_customize);
  // echo '</pre>';
}
