<?php

/**
 * Custom Preset Generator Plugin for Beaver Builder Plugin & Theme.
 * 
 * @wordpress-plugin
 * Plugin Name: 	Custom Preset Generator
 * Plugin URI: 		https://www.wordpress.org/plugins/custom-preset-generator/
 * Description: 	A Beaver Builder add-on which is generating the custom preset for Beaver Builder Theme.
 * Author: 			WP Beaver World
 * Author URI: 		https://www.wpbeaverworld.com/
 *
 * Version: 		1.0
 *
 * License: 		GPLv2 or later
 * License URI: 	http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Text Domain: 	custom-preset-generator
 * Domain Path: 	languages  
 */

/**
 * Copyright (c) 2017 WP Beaver World. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 */

//* Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) {
  wp_die( __( "Sorry, you are not allowed to access this page directly.", 'custom-preset-generator' ) );
}

define( 'CPG_VERSION', 	'1.0' );
define( 'CPG_FILE', 	trailingslashit( dirname( __FILE__ ) ) . 'custom-preset-generator.php' );
define( 'CPG_DIR', 		plugin_dir_path( CPG_FILE ) );
define( 'CPG_URL', 		plugins_url( '/', CPG_FILE ) );

register_activation_hook( __FILE__, 'cpg_activate' );
		
add_action( 'admin_init', 		'cpg_plugin_deactivate' );
add_action( 'switch_theme',		'cpg_plugin_deactivate' );
add_action( 'plugins_loaded', 	'cpg_load_textdomain' );

/**
 * Activate plugin
 */ 
function cpg_activate()
{
	if ( ! class_exists('FLBuilder') || ! class_exists('FLTheme') )
	{
		//* Deactivate ourself
		deactivate_plugins( __FILE__ );
		add_action( 'admin_notices', 'cpg_admin_notice_message' );
		add_action( 'network_admin_notices', 'cpg_admin_notice_message' );
		return;	
	}
}

/**
 * This function is triggered when the WordPress theme is changed.
 * It checks if the Beaver Builder Plugin & theme both are active. If not, it deactivates itself.
 */
function cpg_plugin_deactivate()
{
	if ( ! class_exists('FLBuilder') || ! class_exists('FLTheme') )
	{
		//* Deactivate ourself
		deactivate_plugins( __FILE__ );
		add_action( 'admin_notices', 'cpg_admin_notice_message' );
		add_action( 'network_admin_notices', 'cpg_admin_notice_message' );
	}
}

/**
 * Shows an admin notice if you're not using the Beaver Builder Theme and Plugin.
 */
function cpg_admin_notice_message()
{
	if ( ! is_admin() ) {
		return;
	}
	else if ( ! is_user_logged_in() ) {
		return;
	}
	else if ( ! current_user_can( 'update_core' ) ) {
		return;
	}

	$error = __( 'Sorry, you can\'t use the Custom Preset Generator Plugin unless the Beaver Builder Plugin & Theme both are active. The plugin has been deactivated.', 'custom-preset-generator' );

	echo '<div class="error"><p>' . $error . '</p></div>';

	if ( isset( $_GET['activate'] ) )
	{
		unset( $_GET['activate'] );
	}
}

/**
 * Loads plugin.
 */ 
function cpg_load_textdomain()
{
	//* Load textdomain for translation 
	load_plugin_textdomain( 'custom-preset-generator', false, CPG_DIR. '/languages' );
}

add_action( 'after_setup_theme', 'cpg_load_files' );

/**
 * Loads classes and includes.
 */ 
function cpg_load_files()
{

	if( ! class_exists('FLBuilder') || ! class_exists('FLTheme') )
		return;

	// Classes
	require_once CPG_DIR . '/classes/class-custom-preset-generator-form.php';
	require_once CPG_DIR . '/classes/class-sections-keys.php';
	require_once CPG_DIR . '/classes/class-custom-preset-generator.php';

	//helpers
	require_once CPG_DIR . '/includes/field-preset.php';
	require_once CPG_DIR . '/includes/field-layout.php';
	require_once CPG_DIR . '/includes/field-background.php';
	require_once CPG_DIR . '/includes/field-accent-color.php';
	require_once CPG_DIR . '/includes/field-headings.php';
	require_once CPG_DIR . '/includes/field-body-text.php';
	require_once CPG_DIR . '/includes/field-social-links.php';
	require_once CPG_DIR . '/includes/field-topbar.php';
	require_once CPG_DIR . '/includes/field-header.php';
	require_once CPG_DIR . '/includes/field-content.php';
	require_once CPG_DIR . '/includes/field-footer.php';
}