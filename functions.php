<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

/* Chargement des feuilles de style et des scripts */
function mpf_enqueue_styles_and_scripts() {
    /* Chargement des styles */

    wp_enqueue_style('ecf-base', get_template_directory_uri() . '/css/base.css');
    wp_enqueue_style('ecf-style', get_template_directory_uri() . '/css/style.css');
    
    /* Chargement des scripts */
    wp_enqueue_script('nav', get_stylesheet_directory_uri() . '/js/nav.js', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'mpf_enqueue_styles_and_scripts');


function meks_which_template_is_loaded() {
    if ( is_super_admin() ) {
        global $template;
        print_r( $template );
    }
}
 
add_action( 'wp_footer', 'meks_which_template_is_loaded' );
