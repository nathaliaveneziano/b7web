<?php
// Include
require get_template_directory() . '/include/customizer/social.php';

// Functions
function nv_customize_register($wp_customize)
{
  nv_social_customizer($wp_customize);
}
