<?php

function argon_css() {

    wp_register_style('site-css', get_template_directory_uri() . '/assets/styles/css/app.css', array(), false, 'all' );

    wp_enqueue_style('site-css');
}

add_action('wp_enqueue_scripts', 'argon_css', 999);


function argon_js() {

    wp_enqueue_script('jquery');

    wp_register_script('site-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array( 'jquery' ), false, true );

    wp_enqueue_script('site-js');
}

add_action('wp_enqueue_scripts', 'argon_js', 1999);



function argon_theme_admin_enqueue( $hook ) {

    if ( 'toplevel_page_argon-theme-settings' != $hook ) {
        return;
    }

    wp_register_style('my_argon-theme-admin_style', get_template_directory_uri() . '/css/app.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'my_argon-theme-admin_style' );

    wp_enqueue_media();

    wp_register_script('my_argon-theme-admin_script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('my_argon-theme-admin_script' );
}
add_action( 'admin_enqueue_scripts', 'argon_theme_admin_enqueue');