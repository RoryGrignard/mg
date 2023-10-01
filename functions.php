<?php

// Load CSS
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.3.2', 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

// Load JS
function load_js()
{
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '5.3.2', true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');

// Theme options
add_theme_support( 'menus' );

// Menus
register_nav_menus(
    array(
        'header-nav' => 'Header navigation',
        'footer-nav' => 'Footer navigation',
    )
);