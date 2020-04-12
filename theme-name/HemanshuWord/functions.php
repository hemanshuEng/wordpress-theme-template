<?php
function add_theme_scripts(){
    $fullname = basename(glob(get_template_directory() . "/dist/*js")[0]);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/' . $fullname, [], null, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

echo get_template_directory_uri();
echo get_template_directory();