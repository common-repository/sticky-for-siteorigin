<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://mimo.studio
 * @since             1.0.0
 * @package           Sticky_Siteorigin
 *
 * @wordpress-plugin
 * Plugin Name:       Sticky for SiteOrigin
 * Plugin URI:        http://mimo.studio
 * Description:       Stick widgets inside their own rows using SiteOrigin PageBuilder
 * Version:           1.0.1
 * Author:            mimothemes
 * Author URI:        http://mimo.studio
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sticky-siteorigin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sticky-siteorigin-activator.php
 */
function activate_sticky_siteorigin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sticky-siteorigin-activator.php';
	Sticky_Siteorigin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sticky-siteorigin-deactivator.php
 */
function deactivate_sticky_siteorigin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sticky-siteorigin-deactivator.php';
	Sticky_Siteorigin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sticky_siteorigin' );
register_deactivation_hook( __FILE__, 'deactivate_sticky_siteorigin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sticky-siteorigin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sticky_siteorigin() {

	$plugin = new Sticky_Siteorigin();
	$plugin->run();

}
run_sticky_siteorigin();
