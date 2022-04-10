<?php
/**
 * Plugin Name: Plugin Gutenberg Blocks
 * Plugin URI: https://github.com/anthonythorne/plugin-gutenberg-blocks
 * Description: This is a boilerplate for adding multiple blocks within a plugin.
 * Version: 1.0.0
 * Author: Anthony Thorne
 * Author URI: https://github.com/anthonythorne/
 * Text Domain: plugin-gutenberg-blocks
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @file    plugin-gutenberg-blocks.php
 * @package Plugin\Gutenberg\Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'init', 'register_plugin_gutenberg_blocks' );
/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function register_plugin_gutenberg_blocks() {

	// Gather all of the block directory paths relative to this directory.
	$blocks = glob( __DIR__ . DIRECTORY_SEPARATOR . 'blocks/*' . DIRECTORY_SEPARATOR );

	if ( $blocks ) {
		foreach ( $blocks as $block_type ) {

			$block_json_path = $block_type . 'block.json';

			/*
			 * If this is local development environment, check if the block.json exits and deliver a wp_die message.
			 * Requires the following constants being defined within wp-config.php or the like;
			 * define( 'WP_ENVIRONMENT_TYPE', 'local' );
			 * define( 'WP_DEBUG_DISPLAY', true );
			 */
			if ( ! file_exists( $block_json_path ) &&
				function_exists( 'wp_get_environment_type' ) &&
				'local' === wp_get_environment_type() &&
				defined( 'WP_DEBUG_DISPLAY' ) &&
				WP_DEBUG_DISPLAY ) {

				// Local environment error.
				wp_die( sprintf( 'Block json file missing for block directory %s.', $block_type ) ); // phpcs:ignore
			}

			$args_path = $block_type . 'args.php';

			if ( file_exists( $args_path ) ) {
				$args = include_once $args_path;
			} else {
				$args = [];
			}

			/**
			 * Variable Type Definition.
			 *
			 * @param string|WP_Block_Type $block_type A path to the folder where the `block.json` file is located.
			 * @param array                $args       Optional. Array of block type arguments. Accepts any public property
			 *                                         of `WP_Block_Type`. See WP_Block_Type::__construct() for information
			 *                                         on accepted arguments. Default empty array.
			 */
			register_block_type( $block_type, $args );
		}
	}
}
