<?php
/**
 * Uncorked functions and definitions
 *
 * @package Uncorked
 */
// ini_set('display_errors', 'On');
// error_reporting(E_ALL);

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );

if ( ! function_exists( 'uncorked_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */

function uncorked_setup() {

	require( get_template_directory() . '/inc/tha_theme_hooks.php');
	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Customizer additions
	 */
	require( get_template_directory() . '/inc/customizer.php' );

	/**
	 * Custom Nav Menu handler for the Navbar.
	 */
	require_once( get_template_directory() . '/inc/nav-menu-walker.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Uncorked, use a find and replace
	 * to change 'uncorked' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'uncorked', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'carousel-thumb', 1200, 540, true );

	/**
	 * This theme uses wp_nav_menu() in two locations.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'uncorked' ),
		'follow' => __( 'Follow Links Menu', 'uncorked' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // uncorked_setup
add_action( 'after_setup_theme', 'uncorked_setup' );

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for WordPress 3.3
 * using feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * @todo Remove the 3.3 support when WordPress 3.6 is released.
 *
 * Hooks into the after_setup_theme action.
 */
function uncorked_register_custom_background() {
	$args = array(
		'default-color' => '2A333C',
		'default-image' => '',
	);

	$args = apply_filters( 'uncorked_custom_background_args', $args );

	if ( function_exists( 'wp_get_theme' ) ) {
		add_theme_support( 'custom-background', $args );
	} else {
		define( 'BACKGROUND_COLOR', $args['default-color'] );
		if ( ! empty( $args['default-image'] ) )
			define( 'BACKGROUND_IMAGE', $args['default-image'] );
		add_custom_background();
	}
}
add_action( 'after_setup_theme', 'uncorked_register_custom_background' );

/**
 * Register widget areas
 */
function uncorked_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'uncorked' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s well well-large">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Front Page 1', 'uncorked' ),
		'id'            => 'front1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Front Page 2', 'uncorked' ),
		'id'            => 'front2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Front Page 3', 'uncorked' ),
		'id'            => 'front3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'uncorked' ),
		'id'            => 'foot1',
		'before_widget' => '<aside id="%1$s" class="widget well-small %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'uncorked' ),
		'id'            => 'foot2',
		'before_widget' => '<aside id="%1$s" class="widget well-small %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 3', 'uncorked' ),
		'id'            => 'foot3',
		'before_widget' => '<aside id="%1$s" class="widget well-small %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 4', 'uncorked' ),
		'id'            => 'foot4',
		'before_widget' => '<aside id="%1$s" class="widget well-small %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'uncorked_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function uncorked_scripts() {
	
	if ( is_admin() ) {
	    wp_enqueue_style( 'Uncorked-style', get_stylesheet_uri() );
    }
	
	if ( !is_admin() ) { 
	    wp_register_style(
	        'Uncorked-styles',
	        get_bloginfo( 'stylesheet_directory' ) . '/css/style.css',
	        false,
	        1.0
	    );
	    wp_enqueue_style( 'Uncorked-styles' );
	}
	
	wp_enqueue_script( 'Uncorked-scripts', get_template_directory_uri() . '/js/uncorked-ck.js', array( 'jquery' ), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'Uncorked-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}


add_action( 'wp_enqueue_scripts', 'uncorked_scripts' );


add_filter('widget_text', 'do_shortcode');

		
/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );
