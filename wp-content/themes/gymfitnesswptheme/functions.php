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
