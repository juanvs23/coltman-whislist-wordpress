<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/juanvs23/coltman-whislist-wordpress.git
 * @since      1.0.0
 *
 * @package    Whitlist_Post
 * @subpackage Whitlist_Post/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Whitlist_Post
 * @subpackage Whitlist_Post/includes
 * @author     Juan Carlos Avila Pérez <juanvs23@gmail.com>
 */
class Whitlist_Post_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'whitlist-post',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
