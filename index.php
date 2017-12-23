<?php
/**
 * Plugin Name: gutenberg-plugin-template
 * Plugin URI: https://github.com/ryo-utsunomiya/gutenberg-plugin-template
 * Description: A template for WordPress plugin that extends Gutenberg.
 * Version: 1.0.0
 * Author: Ryo Utsunomiya
 * License: GPLv2
 *
 * @package gutenberg-plugin-template
 */

/**
 * Register Block JavaScript file.
 */
function my_enqueue_block_editor_assets() {
	wp_enqueue_script(
		'markdown-block',
		plugins_url( 'build/index.js', __FILE__ ),
		array( 'wp-blocks', 'wp-element' )
	);
}

add_action( 'enqueue_block_editor_assets', 'my_enqueue_block_editor_assets' );
