<?php
/**
 * Dashboard admin page.
 *
 * @package Apt_Genies_Google_Sheets
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class AGS_Admin_Dashboard {
	/**
	 * Render dashboard page.
	 */
	public static function render() {
		?>
		<div class="wrap">
			<h1><?php echo esc_html__( 'Apt Genies — Dashboard', 'apt-genies-google-sheets' ); ?></h1>
			<p><?php echo esc_html__( 'Welcome to the Apt Genies admin dashboard.', 'apt-genies-google-sheets' ); ?></p>
		</div>
		<?php
	}
}

