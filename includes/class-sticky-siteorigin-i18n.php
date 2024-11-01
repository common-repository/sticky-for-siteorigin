<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://mimo.studio
 * @since      1.0.0
 *
 * @package    Sticky_Siteorigin
 * @subpackage Sticky_Siteorigin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Sticky_Siteorigin
 * @subpackage Sticky_Siteorigin/includes
 * @author     mimothemes <mimocontact@gmail.com>
 */
class Sticky_Siteorigin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'sticky-siteorigin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
