<?php

/**
 * enqueue scripts and styles.
 */
function venue_style_scripts(){

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.1.3', 'all');
    wp_enqueue_style('bootstrap-them', get_template_directory_uri() . '/assets/css/bootstrap-theme.min.css', array(), '2.0.7', 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/fontAwesome.css', array(), '1.0.0', 'all');
    wp_enqueue_style('hero-slider', get_template_directory_uri() . '/assets/css/hero-slider.css', array(), ' 6.5.0', 'all');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl-carousel.css', array(), '1.0.0', 'all');
    wp_enqueue_style('datepicker', get_template_directory_uri() . '/assets/css/datepicker.css', array(), '1.0.0', 'all');
    wp_enqueue_style('templatemo-style', get_template_directory_uri() . '/assets/css/templatemo-style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('venue-style', get_stylesheet_uri());

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array(), '4.0.0', true);
    wp_enqueue_script('datepicker', get_template_directory_uri() . '/assets/js/datepicker.js', array(), '5.1.3', true);
    wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), '2.0.8', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '2.0.8', true);
}

add_action('wp_enqueue_scripts', 'venue_style_scripts');