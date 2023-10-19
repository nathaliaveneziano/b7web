<?php
function nv_theme_styles()
{
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
  wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/theme.css');

  wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'nv_theme_styles');
