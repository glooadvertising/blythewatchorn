<?php 

    function add_theme_styles_and_scripts() {
        // STYLESHEETS
        wp_enqueue_style( 'style', get_stylesheet_uri());
        wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.min.css', [], false, 'all' );
        // SCRIPTS
        wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], false, true );
    }

    add_action( 'wp_enqueue_scripts', 'add_theme_styles_and_scripts' );
