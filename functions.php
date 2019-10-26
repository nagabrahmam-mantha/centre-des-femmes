<?php
function enqueue_styles() {
	wp_enqueue_style( 'parent_css', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('femme_css', get_stylesheet_directory_uri().'/style.css');
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
