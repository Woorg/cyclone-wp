<?php
/**
 * cyclone functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cyclone
 */

if ( ! function_exists( 'cyclone_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cyclone_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on cyclone, use a find and replace
		 * to change 'cyclone' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cyclone', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'cyclone' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'cyclone_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'cyclone_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cyclone_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'cyclone_content_width', 640 );
}
add_action( 'after_setup_theme', 'cyclone_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cyclone_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cyclone' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cyclone' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cyclone_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cyclone_scripts() {

	// style
	wp_enqueue_style( 'cyclone-style', get_stylesheet_uri() );
	// slider
	wp_enqueue_style( 'tiny-slider', get_template_directory_uri() . '/front/static/dev/assets/css/separate-css/tiny-slider.css' );
	// tabs
	wp_enqueue_style( 'tabby-ui', get_template_directory_uri() . '/front/static/dev/assets/css/separate-css/tabby-ui.min.css' );
	// slick
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/front/static/dev/assets/css/separate-css/slick.css' );
	// slick theme
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/front/static/dev/assets/css/separate-css/slick-theme.css' );
	// magnific
	wp_enqueue_style( 'magnific', get_template_directory_uri() . '/front/static/dev/assets/css/separate-css/magnific-popup.css' );
	// main
	wp_enqueue_style( 'main', get_template_directory_uri() . '/front/static/prod/assets/css/main.min.css' );


	// Scripts

	// lazyload
	wp_enqueue_script( 'lazyload', get_template_directory_uri() . '/front/static/dev/assets/js/separate-js/lazyload.min.js', array('jquery'), '', true);
	// slick
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/front/static/dev/assets/js/separate-js/slick.min.js' , array('jquery'), '', true);
	// mask
	wp_enqueue_script('mask', get_template_directory_uri() . '/front/static/dev/assets/js/separate-js/jquery.mask.min.js', array('jquery'), '', true);
	// tabby
	wp_enqueue_script( 'tabby', get_template_directory_uri() . '/front/static/dev/assets/js/separate-js/tabby.polyfills.min.js' , array('jquery'), '', true);
	// magnific
	wp_enqueue_script( 'magnific', get_template_directory_uri() . '/front/static/dev/assets/js/separate-js/jquery.magnific-popup.min.js' , array('jquery'), '', true);
	// main
	wp_enqueue_script('main', get_template_directory_uri() . '/front/static/prod/assets/js/main.min.js', array('jquery'), '', true);

	if ( is_page('16') ) {
		// maps
		wp_enqueue_script('maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDDO60TDSumlziHzbybxGGbAEegP7zLX0Y&amp;callback=initMap', array('jquery'), '', true);
		wp_script_add_data( 'maps', 'defer', true );
		wp_script_add_data( 'maps', 'async', true );

	}

	// wp_enqueue_script( 'cyclone-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );


	// wp_enqueue_script( 'cyclone-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'cyclone_scripts' );

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
 * Acf blocks
*/
require get_template_directory() . '/inc/acf-blocks.php';
