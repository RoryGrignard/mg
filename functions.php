<?php

// Load CSS
function my_theme_scripts () {
    // custom theme's stylesheet
    wp_enqueue_style('Open Sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap');
    wp_enqueue_style ('main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_script ('main', get_template_directory_uri() . '/js/main.js');
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

// Theme options
add_theme_support( 'menus' );

// Menus
register_nav_menus(
    array(
        'header-nav' => 'Header navigation',
        'footer-nav' => 'Footer navigation',
    )
);