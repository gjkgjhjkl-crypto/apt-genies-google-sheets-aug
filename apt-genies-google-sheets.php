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