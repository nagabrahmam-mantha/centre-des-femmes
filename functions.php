<?php
function enqueue_styles() {
	wp_enqueue_style( 'parent_css', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'google-fonts-1', 'https://fonts.googleapis.com/css?family=Archivo&display=swap', false );
	wp_enqueue_style( 'google-fonts-2', 'https://fonts.googleapis.com/css?family=Lora&display=swap', false );
	wp_enqueue_style('femme_css', get_stylesheet_directory_uri().'/style.css');
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

/*Footer Menu*/

register_nav_menus(array(
	'footer' => 'Footer Menu',
));
