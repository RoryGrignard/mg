<?php

// Enque styles and scripts
function enqueueStylesAndScripts () {
    wp_enqueue_style('Open Sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap');
    wp_enqueue_style ('main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_script ('main', get_template_directory_uri() . '/js/main.js');
}
add_action('wp_enqueue_scripts', 'enqueueStylesAndScripts');

// Theme options
add_theme_support( 'menus' );

// Register nav menus (theme locations)
register_nav_menus(
    array(
        'header-nav' => 'Header navigation',
        'footer-nav' => 'Footer navigation',
    )
);