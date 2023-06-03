<?php
/**
 * WooCommerce hooks and functions.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Loads and get size guide instance
 *
 * @return bool|object
 */
function sober_addons_size_guide() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return false;
	}

	if ( ! class_exists( 'Sober_Addons_WooCommerce_Size_Guide' ) ) {
		require_once 'size-guide.php';
	}

	return Sober_Addons_WooCommerce_Size_Guide::instance();
}

add_action( 'plugins_loaded', 'sober_addons_size_guide' );