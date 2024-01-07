<?php

// Enque styles and scripts
function enqueueStylesAndScripts () {
    wp_enqueue_style( 'Playfair Display', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400&display=auto' );
    wp_enqueue_style( 'Poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=auto' );
    wp_enqueue_style ( 'main', get_template_directory_uri() . '/css/main.css' );
    wp_enqueue_script ( 'main', get_template_directory_uri() . '/js/main.js' );
}
add_action( 'wp_enqueue_scripts', 'enqueueStylesAndScripts' );

// Theme options
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

// Register nav menus (theme locations)
register_nav_menus(
    array(
        'header-nav' => 'Header navigation',
        'footer-nav' => 'Footer navigation',
    )
);

// Custom image sizes
add_image_size( 'post-thumbnail-large', 800, 450, false );
add_image_size( 'post-thumbnail-small', 800, 450, true );