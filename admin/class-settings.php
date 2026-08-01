<?php
/**
 * Settings admin page.
 *
 * @package Apt_Genies_Google_Sheets
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class AGS_Admin_Settings {
	/**
	 * Render settings page.
	 */
	public static function render() {
		?>
		<div class="wrap">
			<h1><?php echo esc_html__( 'Apt Genies — Settings', 'apt-genies-google-sheets' ); ?></h1>
			<p><?php echo esc_html__( 'Settings will be available here.', 'apt-genies-google-sheets' ); ?></p>
		</div>
		<?php
	}
}

