<?php
/**
 * Vietstart functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Vietstart
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vietstart_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Vietstart, use a find and replace
		* to change 'vietstart' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'vietstart', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'vietstart' ),
			'menu-2' => esc_html__( 'Blog', 'vietstart' ),
			'menu-3' => esc_html__( 'About', 'vietstart' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'vietstart_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'vietstart_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vietstart_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vietstart_content_width', 640 );
}
add_action( 'after_setup_theme', 'vietstart_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vietstart_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Languages', 'vietstart' ),
			'id'            => 'languages',
			'description'   => esc_html__( 'Add widgets here.', 'vietstart' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'vietstart' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'vietstart' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'vietstart_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vietstart_scripts() {
	wp_enqueue_style( 'vietstart-animate', get_template_directory_uri() . '/css/animate.min.css' );
	wp_enqueue_style( 'vietstart-magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );
	wp_enqueue_style( 'vietstart-slick', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'vietstart-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'vietstart-style', 'rtl', 'replace' );

	wp_enqueue_script( 'vietstart-magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', [ 'jquery' ], '1.8', true );
	wp_enqueue_script( 'vietstart-wow', get_template_directory_uri() . '/js/wow.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'vietstart-slick', get_template_directory_uri() . '/js/slick.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'vietstart-script', get_template_directory_uri() . '/js/script.js', [ 'jquery' ], '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vietstart_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/class-vietstart-icons.php';
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if ( ! function_exists( 'rwmb_meta' ) ) {
	/**
	 * Fallback function metabox.
	 *
	 * @return mixed
	 */
	function rwmb_meta( $key, $args = [], $post_id = null ) {
		return null;
	}
}
