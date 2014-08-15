<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
 * @package   WooCommerce_Card
 * @author    Josh Levinson <joshalevinson@gmail.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2014 Your Name or Company Name
 *
 * @wordpress-plugin
 * Plugin Name:       WooCommerce Card
 * Plugin URI:        http://joshlevinson.me/
 * Description:       Styles card forms using Jesse Pollak's Card project - https://github.com/jessepollak/card/
 * Version:           1.0
 * Author:            joshlevinson
 * Author URI:        http://joshlevinson.me/
 * Text Domain:       woocommerce-card-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * WordPress-Plugin-Boilerplate: v2.6.1
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( plugin_dir_path( __FILE__ ) . 'public/class-woocommerce-card.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 */

//register_activation_hook( __FILE__, array( 'WooCommerce_Card', 'activate' ) );
//register_deactivation_hook( __FILE__, array( 'WooCommerce_Card', 'deactivate' ) );

add_action( 'woocommerce_loaded', array( 'WooCommerce_Card', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-woocommerce-card-admin.php' );
	add_action( 'plugins_loaded', array( 'WooCommerce_Card_Admin', 'get_instance' ) );

}
*/