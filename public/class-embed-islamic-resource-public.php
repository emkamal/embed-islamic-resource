<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://kamalabs.com
 * @since      1.0.0
 *
 * @package    Embed_Islamic_Resource
 * @subpackage Embed_Islamic_Resource/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Embed_Islamic_Resource
 * @subpackage Embed_Islamic_Resource/public
 * @author     Mustafa Kamal <mustafakamal87@gmail.com>
 */
class Embed_Islamic_Resource_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Embed_Islamic_Resource_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Embed_Islamic_Resource_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/embed-islamic-resource-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Embed_Islamic_Resource_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Embed_Islamic_Resource_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/embed-islamic-resource-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Register all shortcodes functions
	 *
	 * @since    1.0.0
	 */
	public function register_shortcodes(){
		add_shortcode( 'quran', array( $this, 'shortcode_quran') );
	}

	/**
	 * Quran shortcode
	 *
	 * @since    1.0.0
	 */
	public function shortcode_quran( $attr ){
		return "ini quran loh";
	}

}
