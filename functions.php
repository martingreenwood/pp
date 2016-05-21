<?php
/**
 * pp functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package pp
 */

if ( ! function_exists( 'pp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pp_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on pp, use a find and replace
	 * to change 'pp' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'pp', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/*
	 * ENABLE THUMBNAIL SIZES
	 * 
	 * @link https://developer.wordpress.org/reference/functions/add_image_size/
	 * add_image_size( 'custom-size', 220, 180, true ); // 220 pixels wide by 180 pixels tall, hard crop mode
	 */

	add_image_size( 'home-square', 1280, 1280, true );
	add_image_size( 'home-wide', 1280, 630, true );
	add_image_size( 'home-small', 1280, 1280, true );
	add_image_size( 'home-small-alt', 1280, 1229, true );

	add_image_size( 'portfolio-one', 1280, 1280, true );
	add_image_size( 'portfolio-two', 1280, 641, true );
	add_image_size( 'portfolio-three', 1280, 1280, true );
	add_image_size( 'portfolio-four', 1280, 1280, true );
	add_image_size( 'portfolio-five', 1280, 1280, true );
	add_image_size( 'portfolio-six', 1280, 1280, true );
	add_image_size( 'portfolio-seven', 1280, 1280, true );
	add_image_size( 'portfolio-eight', 1280, 616, true );


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'pp' ),
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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

}
endif; // pp_setup
add_action( 'after_setup_theme', 'pp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pp_content_width', 1170 );
}
add_action( 'after_setup_theme', 'pp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function pp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'pp' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'pp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pp_scripts() {
	wp_enqueue_style( 'pp-fa', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'pp-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'pp-mh', get_template_directory_uri() . '/js/jquery.matchHeight-min.js', '', '', true );
	wp_enqueue_script( 'pp-navigation', get_template_directory_uri() . '/js/navigation.js', '', '', true );
	wp_enqueue_script( 'pp-wow', get_template_directory_uri() . '/js/wow.js', '', '', true );
}
add_action( 'wp_enqueue_scripts', 'pp_scripts' );

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// REMOVE ADMIN BAR FOR EVERYINE BUT ADMIN
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
		show_admin_bar(false);
	}
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * LOAD OPTIONS PAGE
 */
require get_template_directory() . '/inc/options.php';

/**
 * LOAD POST TYPES
 */
require get_template_directory() . '/inc/post-types.php';