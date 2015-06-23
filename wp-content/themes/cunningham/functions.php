<?php
/**
 * cunningham functions and definitions
 *
 * @package cunningham
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'cunningham_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cunningham_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on cunningham, use a find and replace
	 * to change 'cunningham' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'cunningham', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'cunningham' ),
		'mini' => __( 'Mini Menu', 'cunningham' ),
                'category' => __( 'Category Menu', 'cunningham' ),
                'footer' => __( 'Footer Menu', 'cunningham' ),
                'footer_magazine' => __( 'Footer Magazine Menu', 'cunningham' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'cunningham_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
}
endif; // cunningham_setup
add_action( 'after_setup_theme', 'cunningham_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function cunningham_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'cunningham' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cunningham_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cunningham_scripts() {
	wp_enqueue_style( 'cunningham-style', get_stylesheet_uri() );

	wp_enqueue_script( 'cunningham-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'cunningham-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cunningham_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

add_filter( 'show_admin_bar', '__return_false' );

function new_excerpt_more($more) {
    return '…';
}  

add_filter('excerpt_more', 'new_excerpt_more');

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
        
function custom_excerpt_length( $length) {
     return 120;
}	
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function create_post_type_team() {
    $labels = array(
        'name' => 'チーム',
        'all_items' => 'チーム一覧'
    );
    $args = array(
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'public' => true,
        'show_ui' => true,
        'menu-position' => 2,
        'has_archive' => true,
    );
    register_post_type('team', $args);
}
add_action('init', 'create_post_type_team', 0);

?>