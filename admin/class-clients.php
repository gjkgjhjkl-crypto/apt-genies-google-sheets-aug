<?php
/**
 * Clients admin page.
 *
 * @package Apt_Genies_Google_Sheets
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class AGS_Admin_Clients {
	/**
	 * Render clients page.
	 */
	public static function render() {
		?>
		<div class="wrap">
			<h1><?php echo esc_html__( 'Apt Genies — Clients', 'apt-genies-google-sheets' ); ?></h1>
			<p><?php echo esc_html__( 'Clients listing will appear here.', 'apt-genies-google-sheets' ); ?></p>
		</div>
		<?php
	}
}

