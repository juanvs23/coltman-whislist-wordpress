<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/juanvs23/coltman-whislist-wordpress.git
 * @since             1.0.0
 * @package           Whitlist_Post
 *
 * @wordpress-plugin
 * Plugin Name:       Whitlist Post
 * Plugin URI:        https://github.com/juanvs23/coltman-whislist-wordpress.git
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Juan Carlos Avila Pérez
 * Author URI:        https://github.com/juanvs23/coltman-whislist-wordpress.git
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       whitlist-post
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WHITLIST_POST_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-whitlist-post-activator.php
 */
function activate_whitlist_post() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-whitlist-post-activator.php';
	Whitlist_Post_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-whitlist-post-deactivator.php
 */
function deactivate_whitlist_post() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-whitlist-post-deactivator.php';
	Whitlist_Post_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_whitlist_post' );
register_deactivation_hook( __FILE__, 'deactivate_whitlist_post' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-whitlist-post.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_whitlist_post() {

	$plugin = new Whitlist_Post();
	$plugin->run();

}
run_whitlist_post();
