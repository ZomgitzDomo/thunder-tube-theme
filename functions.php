<?php

/*=============================
=            Menus            =
=============================*/
add_theme_support( 'menus' );
function ttt_register_menu() {
  register_nav_menu('primary-menu', __( 'Primary Menu') );
  register_nav_menu('secondary-menu', __( 'Secondary Menu') );
}
add_action('init', 'ttt_register_menu');

/*=============================
=            css            =
=============================*/


function theme_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'jumbotron_css', get_template_directory_uri() . '/css/jumbotron.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/custom.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

/*=============================
=            js            =
=============================*/

function theme_js() {
  wp_enqueue_script( 'tether_js', get_template_directory_uri() . '/js/tether.min.js', '', '', true );
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'theme_js' );

/*=============================
=            Google fonts            =
=============================*/
function ttt_add_google_fonts() {
  wp_register_style( 'googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300');
  wp_enqueue_style( 'googleFonts');
}
add_action( 'wp_enqueue_scripts', 'ttt_add_google_fonts' );

