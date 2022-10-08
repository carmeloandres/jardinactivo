<?php
/**
 * Block styles.
 *
 * @package jardinactivo
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function jardinactivo_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'  => 'jardinactivo-sticky',
			'label' => __( 'Sticky header', 'jardinactivo' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'jardinactivo-flat-button',
			'label' => __( 'Flat button', 'jardinactivo' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'jardinactivo-button-shadow',
			'label' => __( 'Button with shadow', 'jardinactivo' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'jardinactivo-navigation-button',
			'label' => __( 'Button style', 'jardinactivo' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'jardinactivo-navigation-button-shadow',
			'label' => __( 'Button with shadow', 'jardinactivo' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'jardinactivo-list-underline',
			'label' => __( 'Underlined list items', 'jardinactivo' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'jardinactivo-box-shadow',
			'label' => __( 'Box shadow', 'jardinactivo' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'jardinactivo-box-shadow',
			'label' => __( 'Box shadow', 'jardinactivo' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'jardinactivo-box-shadow',
			'label' => __( 'Box shadow', 'jardinactivo' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/site-title',
		array(
			'name'  => 'jardinactivo-text-shadow',
			'label' => __( 'Text shadow', 'jardinactivo' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'jardinactivo-text-shadow',
			'label' => __( 'Text shadow', 'jardinactivo' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'jardinactivo-text-shadow',
			'label' => __( 'Text shadow', 'jardinactivo' ),
		)
	);
}
add_action( 'init', 'jardinactivo_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function jardinactivo_unregister_block_style() {
	wp_enqueue_script(
		'jardinactivo-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		JARDINACTIVO_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'jardinactivo_unregister_block_style' );
