<?php

function bootstrap_scripts() {
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'bootstrap_scripts');

function register_bootstrap_styles() {
    wp_enqueue_style('bootstrap.min.css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'register_bootstrap_styles');

?>