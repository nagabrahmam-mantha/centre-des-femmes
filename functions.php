<?php
function enqueue_styles() {
	wp_enqueue_style( 'parent_css', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory_uri() . '/style.css'), false);
	wp_enqueue_style('femme_css', get_stylesheet_directory_uri().'/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'), false);
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
