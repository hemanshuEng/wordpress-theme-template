<?php
function add_theme_scripts(){
    wp_enqueue_script( 'main', get_template_directory_uri().'/dist/main.js');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );