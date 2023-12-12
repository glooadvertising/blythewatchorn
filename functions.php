<?php 

    function add_theme_styles_and_scripts() {
        // STYLESHEETS
        wp_enqueue_style( 'style', get_stylesheet_uri());
        wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.min.css', [], false, 'all' );
        // SCRIPTS
        wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], false, true );
    }

    add_action( 'wp_enqueue_scripts', 'add_theme_styles_and_scripts' );

    // DEACTIVATE GUTENBERG
    add_filter('gutenberg_can_edit_post', '__return_false', 5);
    add_filter('use_block_editor_for_post', '__return_false', 5);


    // MENUS
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails');

