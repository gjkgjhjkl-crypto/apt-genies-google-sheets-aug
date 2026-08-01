<?php
/**
 * Plugin Name: Apt Genies Google Sheets Connector
 * Plugin URI: https://aptgenies.com
 * Description: Connect WordPress users to their assigned Google Sheets.
 * Version: 1.0.0
 * Author: Apt Genies
 * Author URI: https://aptgenies.com
 * License: GPL-2.0-or-later
 * Text Domain: apt-genies-google-sheets
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'AGS_VERSION', '1.0.0' );
define( 'AGS_PLUGIN_FILE', __FILE__ );
define( 'AGS_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'AGS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Bootstrap will be added in the next step.
// Load admin classes.
require_once AGS_PLUGIN_PATH . 'admin/class-admin-menu.php';

/**
 * Initialize plugin admin.
 */
function ags_initialize_plugin() {
	if ( is_admin() ) {
		$admin = new AGS_Admin_Menu();
		$admin->init();
	}
}
add_action( 'plugins_loaded', 'ags_initialize_plugin' );

/**
 * Activation hook: keep it intentionally simple to avoid errors on activation.
 */
function ags_activate_plugin() {
	// No setup required for Task 002. Placeholder for future activation tasks.
}
register_activation_hook( __FILE__, 'ags_activate_plugin' );