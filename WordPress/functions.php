<?php
/**
 * Mundanapro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mundanapro
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
function mundana_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Mundanapro, use a find and replace
		* to change 'mundana' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'mundana', get_template_directory() . '/languages' );

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
	add_theme_support( 'post-formats', array('image','video') );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header_menu' => esc_html__( 'Header menu', 'mundana' ),
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
			'mundana_custom_background_args',
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
add_action( 'after_setup_theme', 'mundana_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mundana_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mundana_content_width', 640 );
}
add_action( 'after_setup_theme', 'mundana_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mundana_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mundana' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mundana' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mundana_widgets_init' );




require get_template_directory() . '/functions/get-enqueue.php';
require get_template_directory() . '/inc/Mundana_Menu.php';

//require get_template_directory() . '/functions/admin-panel.php';
require get_template_directory() . '/functions/admin-metaboxes.php';

/**custom date on the pages of site */

function mundana_post_data($post_id) {
	$date= get_the_time('M j');
	$read_minutes = get_post_meta($post_id, 'read_minutes', true);
	$out = '<small class="text-muted">';
	$out .= $date;
if($read_minutes) {
	$out .= '&middot; ' .$read_minutes. __(' min read', 'mundana');
}
	$out .= '</small>';
return $out;
}

function mundana_data($post_id) {
	return $date= get_the_time('M j');
}

function munduna_get_human_time() {
$time_diff = human_time_diff( get_post_time('U'), current_time( 'timestamp' ));
return $time_diff  . __(' ago.', 'mundana');
}

function mundana_single_readtime($post_id)
{
	$read_minutess = get_post_meta($post_id, 'read_minutes', true);
	if($read_minutess) {
		$out_single = '&middot; ' . $read_minutess . __(' min read', 'mundana');
return $out_single;
	}
}



function mundana_media(  $types = array() ) {
	$getVideo = apply_filters( 'the_content', get_the_content() ) ;
$items = get_media_embedded_in_content( $getVideo, $types );
return $items[0] ?? $items;
}




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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}