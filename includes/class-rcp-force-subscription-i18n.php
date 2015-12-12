<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://digisavvy.com
 * @since      1.0.0
 *
 * @package    Rcp_Force_Subscription
 * @subpackage Rcp_Force_Subscription/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Rcp_Force_Subscription
 * @subpackage Rcp_Force_Subscription/includes
 * @author     Alex Vasquez <alex@digisavvy.com>
 */
class Rcp_Force_Subscription_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'rcp-force-subscription',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
