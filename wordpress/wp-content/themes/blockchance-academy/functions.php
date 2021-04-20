<?php
/**
 * Blockchance Academy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blockchance_Academy
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'blockchance_academy_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function blockchance_academy_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Blockchance Academy, use a find and replace
		 * to change 'blockchance-academy' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'blockchance-academy', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'blockchance-academy' ),
			)
		);

		function blockchance_academy_custom_post_type() {
			register_post_type('definition',
				array(
					'labels'      => array(
						'name'          => __('Definition', 'textdomain'),
						'singular_name' => __('Definition', 'textdomain'),
					),
					'public'      => true,
					'show_in_rest' => true,
            		'supports' => array('editor')
				)
			);
			register_post_type('report',
				array(
					'labels'      => array(
						'name'          => __('Bericht', 'textdomain'),
						'singular_name' => __('Bericht', 'textdomain'),
					),
					'public'      => true,
					'show_in_rest' => true,
            		'supports' => array('editor')
				)
			);
			register_post_type('interview',
				array(
					'labels'      => array(
						'name'          => __('Interview', 'textdomain'),
						'singular_name' => __('Interview', 'textdomain'),
					),
					'public'      => true,
					'show_in_rest' => true,
            		'supports' => array('editor')
				)
			);
			register_post_type('press-release',
				array(
					'labels'      => array(
						'name'          => __('Pressebericht', 'textdomain'),
						'singular_name' => __('Pressebericht', 'textdomain'),
					),
					'public'      => true,
					'show_in_rest' => true,
            		'supports' => array('editor')
				)
			);
			register_post_type('comment',
				array(
					'labels'      => array(
						'name'          => __('Kommentar', 'textdomain'),
						'singular_name' => __('Kommentar', 'textdomain'),
					),
					'public'      => true,
					'show_in_rest' => true,
            		'supports' => array('editor')
				)
			);
			register_post_type('professional-article',
				array(
					'labels'      => array(
						'name'          => __('Fachartikel', 'textdomain'),
						'singular_name' => __('Fachartikel', 'textdomain'),
					),
					'public'      => true,
					'show_in_rest' => true,
            		'supports' => array('editor')
				)
			);
		}
		add_action('init', 'blockchance_academy_custom_post_type');

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
				'blockchance_academy_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'blockchance_academy_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blockchance_academy_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blockchance_academy_content_width', 640 );
}
add_action( 'after_setup_theme', 'blockchance_academy_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function blockchance_academy_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'blockchance-academy' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'blockchance-academy' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'blockchance_academy_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function blockchance_academy_scripts() {
	wp_enqueue_style( 'blockchance-foundation', 'https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css' );
	wp_enqueue_style( 'blockchance-academy-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'blockchance-academy-style', 'rtl', 'replace' );

	wp_enqueue_script( 'blockchance-academy-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'blockchance-foundation', 'https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js', array('jquery') );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blockchance_academy_scripts' );

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

