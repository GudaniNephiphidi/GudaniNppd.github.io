<?php
/*
 * Plugin Name: Wrapper Link Elementor
 * Version: 1.0.0
 * Description: Plugin to give wrapper links on Elementor Sections and Columns.
 * Author: Pedro Gusmão
 * Author URI: https://pedrogusmao.digital
 * Text Domain: wrapper-link-elementor
 * Domain Path: /languages
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0
 * Elementor tested up to: 3.9.2
*/


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


function elementor_wrapper_link_start() {

	// Load plugin file
	require_once( __DIR__ . '/includes/plugin.php' );
    require_once( __DIR__ . '/includes/controls.php' );
    require_once( __DIR__ . '/includes/implement.php' );

	// Run the plugin
	\Elementor_Wrapper_Link\ElementorWrapperLinkPlugin::instance();

}
add_action( 'plugins_loaded', 'elementor_wrapper_link_start' );


function languages() {
    load_plugin_textdomain( 'wrapper-link-elementor', false, dirname(plugin_basename(__FILE__)) . '/languages' );
}




































