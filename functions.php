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




function business_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on business_theme, use a find and replace
	 * to change 'business_theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'business_theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'business_theme-featured-image', 1440, 9999 );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => __( 'Primary', 'business_theme' ),
		'social' => __( 'Social Links', 'business_theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 600,
		'height'      => 300,
		'flex-width'  => true,
		'flex-height' => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for core editor styles
	add_theme_support( 'editor-styles' );

	// Add support for custom editor styles
	add_editor_style( 'editor.css' );

	// Add support for custom color scheme.
	add_theme_support( 'editor-color-palette', array(
		array(
				'name' => 'Primary Color',
				'slug' => 'primary-color',
				'color' => '#327677',
		),
		array(
				'name' => 'Secondary Color',
				'slug' => 'secondary-color',
				'color' => '#79E2DA',
		),

	) );
}
add_action( 'after_setup_theme', 'business_theme_setup' );
