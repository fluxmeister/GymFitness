<?php

// Creates the Menus
function gymfitness_menus() {
    // WordPress Functon
    register_nav_menus( array(
        'main-menu' => 'Main Menu', 
        // 'main-menu2' => 'Main Menu 2', 
        // 'social-menu' => 'Social Menu'
    ) );
}

// Hook
add_action('init', 'gymfitness_menus' );


// Adds Stylesheets and JS Files
function gymfitness_scripts() {
    // Normalize CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

}
add_action('wp_enqueue_scripts', 'gymfitness_scripts');