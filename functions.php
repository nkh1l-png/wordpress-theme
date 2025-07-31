<?php
/**
 * Theme functions and definitions
 */

if ( ! function_exists( 'job_listing_theme_setup' ) ) :
    function job_listing_theme_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
    }
endif;
add_action( 'after_setup_theme', 'job_listing_theme_setup' );

function job_listing_theme_scripts() {
    // Bootstrap 5 CSS from CDN
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), '5.3.0' );
    // Theme stylesheet
    wp_enqueue_style( 'job-listing-theme-style', get_stylesheet_uri(), array( 'bootstrap-css' ), '0.1' );

    // Bootstrap 5 JS from CDN
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), '5.3.0', true );
}
add_action( 'wp_enqueue_scripts', 'job_listing_theme_scripts' );
