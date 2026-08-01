<?php
/**
 * Admin menu and page registrations.
 *
 * @package Apt_Genies_Google_Sheets
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AGS_Admin_Menu {
    /**
     * Initialize hooks.
     */
    public function init() {
        add_action( 'admin_menu', array( $this, 'register_menus' ) );
    }

    /**
     * Register top level menu and subpages.
     */
    public function register_menus() {
        $capability = 'manage_options';

        $slug = 'ags-dashboard';
        add_menu_page(
            __( 'Apt Genies', 'apt-genies-google-sheets' ),
            __( 'Apt Genies', 'apt-genies-google-sheets' ),
            $capability,
            $slug,
            array( $this, 'render_dashboard' ),
            'dashicons-admin-generic',
            56
        );

        add_submenu_page( $slug, __( 'Dashboard', 'apt-genies-google-sheets' ), __( 'Dashboard', 'apt-genies-google-sheets' ), $capability, $slug, array( $this, 'render_dashboard' ) );
        add_submenu_page( $slug, __( 'Clients', 'apt-genies-google-sheets' ), __( 'Clients', 'apt-genies-google-sheets' ), $capability, 'ags-clients', array( $this, 'render_clients' ) );
        add_submenu_page( $slug, __( 'Settings', 'apt-genies-google-sheets' ), __( 'Settings', 'apt-genies-google-sheets' ), $capability, 'ags-settings', array( $this, 'render_settings' ) );
        add_submenu_page( $slug, __( 'Help', 'apt-genies-google-sheets' ), __( 'Help', 'apt-genies-google-sheets' ), $capability, 'ags-help', array( $this, 'render_help' ) );
    }

    /** Render callbacks delegate to simple page classes. */
    public function render_dashboard() {
        require_once AGS_PLUGIN_PATH . 'admin/class-dashboard.php';
        AGS_Admin_Dashboard::render();
    }

    public function render_clients() {
        require_once AGS_PLUGIN_PATH . 'admin/class-clients.php';
        AGS_Admin_Clients::render();
    }

    public function render_settings() {
        require_once AGS_PLUGIN_PATH . 'admin/class-settings.php';
        AGS_Admin_Settings::render();
    }

    public function render_help() {
        require_once AGS_PLUGIN_PATH . 'admin/class-help.php';
        AGS_Admin_Help::render();
    }
}
