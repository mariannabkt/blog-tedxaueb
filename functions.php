<?php
function tedxaueb_blog_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'tedxaueb_blog_setup');

function tedxaueb_blog_styles() {
    $theme_version = wp_get_theme()->get('Version'); // Get theme version
    $css_version = filemtime(get_template_directory() . '/style.css'); // Get last modified time of style.css
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), $css_version); // Use modified time as version
}
add_action('wp_enqueue_scripts', 'tedxaueb_blog_styles');

function custom_excerpt_length($length) {
    return 20; // change 20 to the number of words you want
}
add_filter('excerpt_length', 'custom_excerpt_length');

