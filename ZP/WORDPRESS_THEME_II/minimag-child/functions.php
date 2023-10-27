<?php

function minimag_child_scripts()
{
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/assets/css/child-styles.css', array('template'));
}
add_action('wp_enqueue_scripts', 'minimag_child_scripts');
