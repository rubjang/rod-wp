<?php

/**
 *
 * @link              https://www.thaitheme.com
 * @since             1.0.0
 * @package           Facebook_Login
 *
 * @wordpress-plugin
 * Plugin Name:       ThaiTheme Facebook Login
 * Plugin URI:        https://www.thaitheme.com
 * Description:       Facebook Login By ThaiTheme.com (Modify Version)
 * Version:           1.0.4
 * Author:            ThaiTheme
 * Author URI:        https://www.thaitheme.com
 * License:           GPL-2.0+
 * License URI:       https://www.thaitheme.com
 * Text Domain:        Thaitheme Facebook Login
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-facebook-login-activator.php
 */
function activate_facebook_login() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-facebook-login-activator.php';
	Facebook_Login_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-facebook-login-deactivator.php
 */
function deactivate_facebook_login() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-facebook-login-deactivator.php';
	Facebook_Login_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_facebook_login' );
register_deactivation_hook( __FILE__, 'deactivate_facebook_login' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-facebook-login.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_facebook_login() {

	$plugin = new Facebook_Login();
	$plugin->run();

}
run_facebook_login();
