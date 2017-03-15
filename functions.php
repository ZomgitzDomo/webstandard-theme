<?php

/*-------------------------------------
| Menus
-------------------------------------*/
add_theme_support( 'menus' );
function webstandards_register_menu() {
  register_nav_menu('main-menu', __( 'Main Menu') );
}
add_action('init', 'webstandards_register_menu');



function theme_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'jumbotron_css', get_template_directory_uri() . '/assets/css/jumbotron.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'wp_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

//add javascript
function theme_js() {
    wp_enqueue_script( 'tether_js', get_template_directory_uri() . '/assets/js/tether.min.js', '', '', true );
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

add_filter( 'show_admin_bar', '__return_false' );

