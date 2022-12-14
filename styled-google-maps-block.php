<?php
/**
 * Plugin Name:       Styled Google Maps Block
 * Description:       A highly-customizable Google Maps block. Supports custom themes, navigational directions, and Google Street View.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           1.0.2
 * Author:            Daniel Ellis
 * Author URI:				https://danielellisdevelopment.com/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       styled-google-maps-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
add_action( 'init', function () {
	register_block_type( __DIR__ . '/build' );
} );
