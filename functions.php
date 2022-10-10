<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jardinactivo
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'JARDINACTIVO_VERSION', wp_get_theme()->get( 'Version' ) );



/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function jardinactivo_setup() {
	add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'jardinactivo_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function jardinactivo_styles() {
	wp_enqueue_style(
		'jardinactivo-style',
		get_stylesheet_uri(),
		[],
		JARDINACTIVO_VERSION
	);
	wp_enqueue_style(
		'jardinactivo-shared-styles',
		get_theme_file_uri( 'assets/css/style-shared.min.css' ),
		[],
		JARDINACTIVO_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'jardinactivo_styles' );
