<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://mimo.studio
 * @since      1.0.0
 *
 * @package    Sticky_Siteorigin
 * @subpackage Sticky_Siteorigin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Sticky_Siteorigin
 * @subpackage Sticky_Siteorigin/admin
 * @author     mimothemes <mimocontact@gmail.com>
 */
class Sticky_Siteorigin_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Sticky_Siteorigin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Sticky_Siteorigin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/sticky-siteorigin-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Sticky_Siteorigin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Sticky_Siteorigin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/sticky-siteorigin-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Adds 'Sticky' tab to SO Page Builder Widgets Style
	 *
	 * @param  array $groups '$groups' represents a filterable variable where you an insert new array that contains tab settings.
	 * @return array The tab details.
	 */
	public function style_groups( $groups ) {

		$groups['sticky'] = array(
			'name' => __( 'Sticky', 'sticky-siteorigin' ),
				'priority' => 40,
		);

		return $groups;
	}
	/**
	 * Add new fields under 'Animate' tab.
	 *
	 * @param  array $fields '$fields' represents a filterable variable where you an insert new array that contains fields settings.
	 * @return array The fields collection.
	 */
	public function style_fields( $fields ) {

		$sticky_types = array(
		
			'no' => 'No',
			'yes' => 'Yes',
		);

		$fields['sticky_type'] = array(
			'name' => 'Stick Widget',
			'default' => 'no',
			'type' => 'select',
			'options' => (array) $sticky_types,
			'group' => 'sticky',
			'description' => 'Select to stick the element or not',
			'priority' => 5,
		);

		$fields['sticky_offset'] = array(
			'name' => 'Offset Top',
			'type' => 'text',
			'group' => 'sticky',
			'description' => 'Offset Top in pixels',
			'priority' => 10,
		);

		$fields['sticky_spacer'] = array(
			'name' => 'Use Spacer',
			'type' => 'select',
			'options' =>  array(
		
			'false' => 'No',
			'true' => 'Yes',
		),
			'group' => 'sticky',
			'description' => 'Select to use or not a Spacer, sometimes needed for good performance',
			'priority' => 15,
			);

		

		return $fields;
	}

	

	

}
