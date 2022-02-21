<?php
function sunjay_armstead_enqueue_theme() {
    wp_enqueue_style( 'parent-stylesheet', get_template_directory_uri() . '/style.css' );
    
}
add_action( 'wp_enqueue_scripts', 'sunjay_armstead_enqueue_theme' );