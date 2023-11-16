<?php
// Include
require get_template_directory() . '/includes/setup.php';

// Hooks
add_action('wp_enqueue_scripts', 'nv_theme_scripts');
add_action('after_setup_theme', 'nv_after_setup');
add_action('widgets_init', 'nv_widgets');
