<?php
/**
 * jardinactivo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jardinactivo
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
function jardinactivo_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on jardinactivo, use a find and replace
		* to change 'jardinactivo' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'jardinactivo', get_template_directory() . '/languages' );

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

	// Includes the nav menu walker bootstrap 5 file
	include_once ('inc/class-bootstrap-5-nav-menu-walker.php');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'main-menu' => esc_html__( 'Main menu', 'jardinactivo' ),
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
			'jardinactivo_custom_background_args',
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
add_action( 'after_setup_theme', 'jardinactivo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jardinactivo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jardinactivo_content_width', 640 );
}
add_action( 'after_setup_theme', 'jardinactivo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jardinactivo_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'jardinactivo' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'jardinactivo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
			// Footer 1
			register_sidebar(array(
				'name' => esc_html__('Footer 1', 'jardinactivo' ),
				'id' => 'footer-1',
				'description' => esc_html__('Add widgets here.', 'jardinactivo' ),
				'before_widget' => '<div class="footer_widget mb-4">',
				'after_widget' => '</div>',
				'before_title' => '<h2 class="widget-title h4">',
				'after_title' => '</h2>'
			));
			// Footer 1 End
	
			// Footer 2
			register_sidebar(array(
				'name' => esc_html__('Footer 2', 'jardinactivo' ),
				'id' => 'footer-2',
				'description' => esc_html__('Add widgets here.', 'jardinactivo'),
				'before_widget' => '<div class="footer_widget mb-4">',
				'after_widget' => '</div>',
				'before_title' => '<h2 class="widget-title h4">',
				'after_title' => '</h2>'
			));
			// Footer 2 End
	
			// Footer 3
			register_sidebar(array(
				'name' => esc_html__('Footer 3', 'jardinactivo' ),
				'id' => 'footer-3',
				'description' => esc_html__('Add widgets here.', 'jardinactivo'),
				'before_widget' => '<div class="footer_widget mb-4">',
				'after_widget' => '</div>',
				'before_title' => '<h2 class="widget-title h4">',
				'after_title' => '</h2>'
			));
			// Footer 3 End
	
			// Footer 4
			register_sidebar(array(
				'name' => esc_html__('Footer 4', 'jardinactivo' ),
				'id' => 'footer-4',
				'description' => esc_html__('Add widgets here.', 'jardinactivo'),
				'before_widget' => '<div class="footer_widget mb-4">',
				'after_widget' => '</div>',
				'before_title' => '<h2 class="widget-title h4">',
				'after_title' => '</h2>'
			));
			// Footer 4 End

			// Bottom Footer
			register_sidebar(array(
				'name' => esc_html__('Bottom Footer', 'jardinactivo' ),
				'id' => 'bottom-footer',
				'description' => esc_html__('Add widgets here.', 'jardinactivo' ),
				'before_widget' => '<div class="footer_widget mb-5">',
				'after_widget' => '</div>',
				'before_title' => '<h2 class="widget-title">',
				'after_title' => '</h2>'
			));
			// Bottom Footer End

}
add_action( 'widgets_init', 'jardinactivo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jardinactivo_scripts() {
	wp_enqueue_style( 'jardinactivo-style',  get_template_directory_uri() . '/assets/css/style.min.css', array(), _S_VERSION );

	wp_enqueue_style('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');

	wp_style_add_data( 'jardinactivo-style', 'rtl', 'replace' );

	wp_enqueue_script( 'jardinactivo-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(),'5.1.1', true );

	wp_enqueue_script( 'jardinactivo-js', get_template_directory_uri() . '/assets/js/jardinactivo.js', array(),_S_VERSION, true );

	wp_localize_script( 'jardinactivo-js','jardinactivo',array(
		"ajax_url" => admin_url('admin-ajax.php')
		)
	);

//	wp_enqueue_script( 'jardinactivo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jardinactivo_scripts' );

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
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Filter to add new clases to custom logo
 */
if (!defined('jardinactivo_change_logo_class')){
	function jardinactivo_change_logo_class ($html){
//		$html = str_replace( 'custom-logo', 'your-custom-class', $html );
    	$html = str_replace( 'custom-logo-link', 'navbar-brand', $html );
		
    	return $html;
	}
	add_filter( 'get_custom_logo', 'jardinactivo_change_logo_class' );	
}

/**
 * Use te ajax login
 */
	if (! defined('jardinactivo_login')){
		function jardinactivo_login(){
			error_log('Se ha accedido al login de jardinactivo');
			error_log('Contenido del POST:'.PHP_EOL.var_export($_POST,true));

			$datos = array(
				"user_login" => $_POST["usuario"],
				"user_password" => $_POST["contrasenya"],
				"remember"  => true
						
			);

			$user = wp_signon($datos); 
			
			error_log('Contenido del User:'.PHP_EOL.var_export($user->get_error_message(),true));
			
			return $user->get_error_message();
		}
	}
	add_action( 'wp_ajax_jardinactivo_login', 'jardinactivo_login' );
    add_action( 'wp_ajax_nopriv_jardinactivo_login', 'jardinactivo_login' );  

/**
 * Use te ajax log out
 */
if (! defined('jardinactivo_log_out')){
	function jardinactivo_log_out(){
		error_log('Se ha accedido al log_out de jardinactivo');

		$user = wp_logout(); 
		
		error_log('Contenido del User:'.PHP_EOL.var_export($user->get_error_message(),true));
		
		return $user->get_error_message();
	}
}
add_action( 'wp_ajax_jardinactivo_log_out', 'jardinactivo_log_out' );
add_action( 'wp_ajax_nopriv_jardinactivo_log_out', 'jardinactivo_log_out' );  
