<?php
/**
 * RealFoodHome theme setup
 */

if ( ! function_exists( 'realfoodhome_setup' ) ) {
    function realfoodhome_setup() {
        // Let WordPress handle the <title> tag
        add_theme_support( 'title-tag' );

        // Featured images
        add_theme_support( 'post-thumbnails' );

        // Menu
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'realfoodhome' ),
        ) );
    }
}
add_action( 'after_setup_theme', 'realfoodhome_setup' );

/**
 * Enqueue styles
 */
function realfoodhome_assets() {
    // Google fonts
    wp_enqueue_style(
        'realfoodhome-fonts',
        'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'realfoodhome-style',
        get_stylesheet_uri(),
        array( 'realfoodhome-fonts' ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'realfoodhome_assets' );