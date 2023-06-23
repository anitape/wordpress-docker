<?php

/* Enabling menu editor in WP admin panel*/

function register_wpmenu(){
    register_nav_menu('primary', 'Main menu');
}

/* Adding featured image to posts*/
add_theme_support('post-thumbnails');

/* Adding menu option to wp-admin*/
add_action('init', 'register_wpmenu');

/* Adding styles*/
function add_styles(){

    wp_enqueue_style(
        'work-sans',
        'https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600&display=swap',
        [],
        '0.1.0'
    );

    wp_enqueue_style(
        'bootstrap',
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css',
        [],
        '5.3.0'
    );

    wp_enqueue_style(
        'style-css',
        get_template_directory_uri() . '/style.css',
        [],
        '0.1.0'
    );

    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
        [],
        '4.7.0'
    );

    wp_enqueue_script(
        'bootstrap-js',
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js',
        [],
        '5.3.0'
    );    
}

add_action('wp_enqueue_scripts', 'add_styles');
