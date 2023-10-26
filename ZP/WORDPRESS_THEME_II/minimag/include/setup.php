<?php

function nv_theme_styles()
{
  wp_enqueue_style('booststrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
  wp_enqueue_style('template', get_template_directory_uri() . '/assets/css/template.css');
  wp_enqueue_style('google-titillium', 'http://fonts.googleapis.com/css?family=Titillium+Web:200,300,600');
  wp_enqueue_style('print', get_template_directory_uri() . '/assets/css/print.css', array('template'), false, 'print');

  wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array('jquery'), wp_rand(), true);
  wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js', array('jquery', 'popper'), wp_rand(), true);
  wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'bootstrap'), wp_rand(), true);
}

function nv_afterr_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-formats', array('video', 'audio'));

  add_theme_support('custom-header', array(
    'defaul-image'  => get_template_directory_uri() . '/assets/images/headers/header-01.jpg',
    'width'         => 1920,
    'height'        => 400,
    'flex-width'    => true,
    'flex-height'   => true,
    // 'header-text'   => false,
    // 'uploads'       => false,
  ));

  register_default_headers(array(
    'header-01' => array(
      'url'           => get_template_directory_uri() . '/assets/images/headers/header-01.jpg',
      'thumbnail_url' => get_template_directory_uri() . '/assets/images/headers/header-01.jpg',
      'description'   => 'Header 01',
    ),
    'header-02' => array(
      'url'           => get_template_directory_uri() . '/assets/images/headers/header-02.jpg',
      'thumbnail_url' => get_template_directory_uri() . '/assets/images/headers/header-02.jpg',
      'description'   => 'Header 02',
    ),
    'header-03' => array(
      'url'           => get_template_directory_uri() . '/assets/images/headers/header-03.jpg',
      'thumbnail_url' => get_template_directory_uri() . '/assets/images/headers/header-03.jpg',
      'description'   => 'Header 03',
    ),
  ));

  register_nav_menu('primary', __('Main menu', 'minimag'));
  register_nav_menu('top', __('Top Menu', 'minimag'));

  load_theme_textdomain('minimag', get_template_directory() . '/languages');
}

function nv_widgets()
{
  register_sidebar(array(
    'name' => __('Sidebar', 'minimag'),
    'id' => 'nv_sidebar_aside',
    'description' => __('Sidebar', 'minimag'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget_title">',
    'after_title' => '</h4>',
  ));

  register_sidebar(array(
    'name' => __('Footer Bar', 'minimag'),
    'id' => 'nv_sidebar_footer',
    'description' => __('Footer Bar', 'minimag'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget_title">',
    'after_title' => '</h4>',
  ));
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
