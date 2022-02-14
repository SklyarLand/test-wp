<?php

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
    wp_enqueue_style( 'theme-font', get_stylesheet_directory_uri() . '/assets/fonts/icomoon/icon-font.css' );
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/assets/css/style.min.css' );

    wp_enqueue_script('custom-jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', [], false, true);
    wp_enqueue_script('bootstrap-popper', get_stylesheet_directory_uri() . '/assets/libs/bootstrap/js/popper.min.js', ['custom-jquery'],false, true);
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/assets/libs/bootstrap/js/bootstrap.min.js', ['custom-jquery'],false, true);
    wp_enqueue_script('ofi', get_stylesheet_directory_uri() . '/assets/libs/ofi/ofi.min.js', ['custom-jquery'],false, true);
    wp_enqueue_script('wow', get_stylesheet_directory_uri() . '/assets/libs/wowjs/wow.min.js', ['custom-jquery'],false, true);
    wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/assets/js/scripts.js', ['custom-jquery', 'bootstrap', 'ofi'],false, true);
}