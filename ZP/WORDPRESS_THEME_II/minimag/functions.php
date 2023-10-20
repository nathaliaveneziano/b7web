<?php
// Include
require get_template_directory() . '/include/setup.php';
require get_template_directory() . '/include/customizer/theme-customizer.php';

// Hooks
add_action('wp_enqueue_scripts', 'nv_theme_styles');
add_action('after_setup_theme', 'nv_afterr_setup');
add_action('widgets_init', 'nv_widgets');
add_action('customize_register', 'nv_customize_register');

add_filter('nav_menu_css_class', 'nv_add_additional_class_on_li', 1, 3);
add_filter('nav_menu_link_attributes', 'nv_add_additional_class_on_a', 1, 3);
