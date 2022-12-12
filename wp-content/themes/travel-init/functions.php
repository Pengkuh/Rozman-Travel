<?php

/**
 * Functions and definitions
 * 
 * @package travel-Init
 * 
 * @since 1.0.0
 */

if (!function_exists('travel_init_setup')) :

    /**
     * Add theme support.
     */
    function travel_init_setup()
    {
        // Add support for block styles.
        add_theme_support('wp-block-styles');

        add_theme_support('block-nav-menus');

        // Enqueue editor styles.
        add_theme_support('editor-styles');
    }

endif;
add_action('after_setup_theme', 'travel_init_setup');

if (!function_exists('travel_init_styles')) :

    /**
     * Enqueue the CSS files.
     *
     * @since 1.0.0
     *
     * @return void
     */

    function travel_init_styles()
    {
        wp_enqueue_style('travel-Init-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_theme_file_path('style.css')));

        //contact-form style
        wp_enqueue_style('travel-init', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_theme_file_path('/assets/css/style.css')), 'all');
    }

endif;

add_action('wp_enqueue_scripts', 'travel_init_styles');

//Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
