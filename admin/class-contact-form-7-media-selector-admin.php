<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       github.com/bruskiza
 * @since      1.0.0
 *
 * @package    Contact_Form_7_Media_Selector
 * @subpackage Contact_Form_7_Media_Selector/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Contact_Form_7_Media_Selector
 * @subpackage Contact_Form_7_Media_Selector/admin
 * @author     Bruce McIntyre <bruce.mcintyre@gmail.com>
 */
class Contact_Form_7_Media_Selector_Admin {

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
		 * defined in Contact_Form_7_Media_Selector_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Contact_Form_7_Media_Selector_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/contact-form-7-media-selector-admin.css', array(), $this->version, 'all' );

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
		 * defined in Contact_Form_7_Media_Selector_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Contact_Form_7_Media_Selector_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/contact-form-7-media-selector-admin.js', array( 'jquery' ), $this->version, false );

	}

}
