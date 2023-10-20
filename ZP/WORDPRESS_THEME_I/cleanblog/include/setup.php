<?php

function cb_theme_styles()
{
  // Bootstrap core CSS
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');

  // Custom fonts for this template
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');
  wp_enqueue_style('google-lora', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
  wp_enqueue_style('google-open_sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');

  // Custom styles for this template
  wp_enqueue_style('style', get_template_directory_uri() . '/css/clean-blog.min.css');

  // Bootstrap core JavaScript
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), wp_rand(), true);

  // Custom scripts for this template
  wp_enqueue_script('script', get_template_directory_uri() . '/js/clean-blog.min.js', array('jquery'), wp_rand(), true);
}

function cb_after_setup()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');

  register_nav_menu('primary', __('Menu Principal', 'cleanblog'));
}
