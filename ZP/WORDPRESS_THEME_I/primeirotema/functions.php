<?php
// Includes
require get_template_directory() . '/include/setup.php';

// Hooks
add_action('wp_enqueue_scripts', 'nv_theme_styles');
add_action('after_setup_theme', 'nv_after_setup_theme');
add_action('widgets_init', 'nv_widgets');
