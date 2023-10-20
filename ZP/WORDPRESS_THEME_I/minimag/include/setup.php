<?php

function nv_theme_styles()
{
  wp_enqueue_style('booststrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
  wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/template.css');

  wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array('jquery'), wp_rand(), true);
  wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js', array('jquery'), wp_rand(), true);
  wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), wp_rand(), true);
}

function nv_afterr_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('custom-logo');

  register_nav_menu('primary', __('Menu Principal', 'minimag'));
  register_nav_menu('top', __('Menu Superior', 'minimag'));
}

function nv_widgets()
{
}

function nv_add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes[] = $args->add_li_class;
  }
  return $classes;
}

function nv_add_additional_class_on_a($atts, $item, $args)
{
  if (property_exists($args, 'add_a_class')) {
    $atts['class'] = $args->add_a_class;
  }
  return $atts;
}
