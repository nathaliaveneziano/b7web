<?php
// Include
require get_template_directory() . '/include/customizer/social.php';
require get_template_directory() . '/include/customizer/layout.php';

// Functions
function nv_customize_register($wp_customize)
{
  nv_social_customizer($wp_customize);
  nv_layout_customizer($wp_customize);
}
