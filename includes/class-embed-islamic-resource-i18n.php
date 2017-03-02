<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://kamalabs.com
 * @since      1.0.0
 *
 * @package    Embed_Islamic_Resource
 * @subpackage Embed_Islamic_Resource/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Embed_Islamic_Resource
 * @subpackage Embed_Islamic_Resource/includes
 * @author     Mustafa Kamal <mustafakamal87@gmail.com>
 */
class Embed_Islamic_Resource_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'embed-islamic-resource',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
