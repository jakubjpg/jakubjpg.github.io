
<?php

//STYLES AND SCRIPTS
function init_theme() {
wp_enqueue_script('dum-script', get_stylesheet_directory_uri() . '/js/script.js', array(), filemtime(get_stylesheet_directory() . '/js/script.js'));
wp_enqueue_style('dumnadrekou', get_stylesheet_directory_uri() . '/css/style.css', array(), filemtime(get_stylesheet_directory() . '/css/style.css'));
wp_enqueue_style('patternsnadrekou', get_stylesheet_directory_uri() . '/css/patterns.css', array(), filemtime(get_stylesheet_directory() . '/css/patterns.css'));
wp_enqueue_style('helpersnadrekou', get_stylesheet_directory_uri() . '/css/helpers.css', array(), filemtime(get_stylesheet_directory() . '/css/helpers.css'));
wp_enqueue_style('carouselnadrekou', get_stylesheet_directory_uri() . '/css/gallery.css', array(), filemtime(get_stylesheet_directory() . '/css/gallery.css'));
wp_enqueue_style('aboutnadrekou', get_stylesheet_directory_uri() . '/css/about.css', array(), filemtime(get_stylesheet_directory() . '/css/about.css'));
wp_enqueue_style('animationsnadrekou', get_stylesheet_directory_uri() . '/css/animations.css', array(), filemtime(get_stylesheet_directory() . '/css/animations.css'));
wp_enqueue_style('inputnadrekou', get_stylesheet_directory_uri() . '/css/input.css', array(), filemtime(get_stylesheet_directory() . '/css/input.css'));
}
add_action('wp_enqueue_scripts', 'init_theme');

// LEAFLET
function load_leaflet() {
    wp_enqueue_style('leaflet-css', 'https://unpkg.com/leaflet/dist/leaflet.css');
    wp_enqueue_script('leaflet-js', 'https://unpkg.com/leaflet/dist/leaflet.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'load_leaflet');
