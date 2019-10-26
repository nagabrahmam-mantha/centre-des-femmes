<?php
function enqueue_styles() {
	wp_enqueue_style( 'parent_css', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'google-fonts-1', 'https://fonts.googleapis.com/css?family=Archivo&display=swap', false );
	wp_enqueue_style( 'google-fonts-2', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700&display=swap', false );
	wp_enqueue_style('femme_css', get_stylesheet_directory_uri().'/style.css');
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

/*Footer Menu*/
register_nav_menus(array(
	'footer' => 'Footer Menu',
	'lang' => 'Language Menu',
));

/*Widgets*/
function add_widgets() {
	register_sidebar( array(
		'name'          => 'Footer Social',
		'id'            => 'footer-social',
		'description'   => 'Add widgets here to appear in your footer.',
		'before_widget' => '<section id="%1$s" class="widget %2$s social-footer">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'add_widgets' );

/**
 * Custom template tags for this theme.
 */
require get_stylesheet_directory() . '/inc/template-tags.php';
