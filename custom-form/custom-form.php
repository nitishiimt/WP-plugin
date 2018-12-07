<?php
/*
 * @version           0.0.1
 * @package           CustomForm
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Form
 * Plugin URI:        https://nitishchauhan.com
 * Description:       This is my test custom form development plugin
 * Version:           0.0.1
 * Text Domain:       
 * Domain Path:       /
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
require_once ABSPATH . 'wp-includes/pluggable.php';
require_once(ABSPATH . 'wp-admin/includes/screen.php');

/**
 * The code that runs during plugin activation.
 */
function activate_custom_form() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-Activator.php';
    Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_custom_form() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-Deactivator.php';
	Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_custom_form');
register_deactivation_hook( __FILE__, 'deactivate_custom_form');
