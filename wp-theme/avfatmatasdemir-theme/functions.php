<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function avfatmatasdemir_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'avfatmatasdemir-theme'),
    ));
}
add_action('after_setup_theme', 'avfatmatasdemir_theme_setup');

function avfatmatasdemir_theme_scripts() {
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), '1.1.0');
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/script.js', array(), '1.1.0', true);
}
add_action('wp_enqueue_scripts', 'avfatmatasdemir_theme_scripts');
