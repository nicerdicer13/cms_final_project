<?php
    function load_styles_and_scripts() {
        wp_enqueue_style('style', get_stylesheet_uri() );
        wp_enqueue_script('main', get_template_directory_uri() . '/main.js', array(), '1.0.0', true);
    }
    add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

    add_theme_support('post-thumbnails');
?>