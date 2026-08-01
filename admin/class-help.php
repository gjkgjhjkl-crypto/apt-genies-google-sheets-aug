<?php
/**
 * Help admin page.
 *
 * @package Apt_Genies_Google_Sheets
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class AGS_Admin_Help {
	/**
	 * Render help page.
	 */
	public static function render() {
		?>
		<div class="wrap">
			<h1><?php echo esc_html__( 'Apt Genies — Help', 'apt-genies-google-sheets' ); ?></h1>
			<p><?php echo esc_html__( 'Help and documentation links will appear here.', 'apt-genies-google-sheets' ); ?></p>
		</div>
		<?php
	}
}

