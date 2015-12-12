<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://digisavvy.com
 * @since             1.0.0
 * @package           Rcp_Force_Subscription
 *
 * @wordpress-plugin
 * Plugin Name:       RCP Force Subscription
 * Plugin URI:        http://wordpress.org/plugin/rcp-force-subscription
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Alex Vasquez
 * Author URI:        http://digisavvy.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rcp-force-subscription
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rcp-force-subscription-activator.php
 */
function activate_rcp_force_subscription() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rcp-force-subscription-activator.php';
	Rcp_Force_Subscription_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rcp-force-subscription-deactivator.php
 */
function deactivate_rcp_force_subscription() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rcp-force-subscription-deactivator.php';
	Rcp_Force_Subscription_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rcp_force_subscription' );
register_deactivation_hook( __FILE__, 'deactivate_rcp_force_subscription' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rcp-force-subscription.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rcp_force_subscription() {

	$plugin = new Rcp_Force_Subscription();
	$plugin->run();

}
run_rcp_force_subscription();
