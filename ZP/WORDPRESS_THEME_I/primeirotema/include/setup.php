<?php
function nv_theme_styles()
{
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
  wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/theme.css');

  wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);
}

function nv_after_setup_theme()
{
  // versões antigas precisa desse código
  add_theme_support('menus');

  // esse código já inclui o codigo acima, não necessitando dele
  register_nav_menu('primary', __('Primary Menu', 'primeirotema'));
  register_nav_menu('footer', __('Footer Menu', 'primeirotema'));
}
