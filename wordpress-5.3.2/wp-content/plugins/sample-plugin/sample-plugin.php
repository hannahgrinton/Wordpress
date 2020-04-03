<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              hannahgrinton.ca
 * @since             1.0.0
 * @package           Sample_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       sample-plugin
 * Plugin URI:        wordpress53.tbd
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Hannah Grinton
 * Author URI:        hannahgrinton.ca
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sample-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SAMPLE_PLUGIN_VERSION', '1.0.0' );
//-------------------------------------------- challenge
function wporg_options_page_html() {
    ?>
    <div class="wrap">
      <h1><?php esc_html( get_admin_page_title() ); ?></h1>
      
		<p>My First WordPress Plugin!</p>
		
    </div>
    <?php
}
add_action( 'admin_menu', 'wporg_options_page' );
function wporg_options_page() {
    add_menu_page(
        'sample-plugin',
        'Sample Plugin',
        'manage_options',
        'wporg',
        'wporg_options_page_html',
        plugin_dir_url(__FILE__) . 'images/icon_wporg.png',
        20
    );
}

function setup_post_type() {
    // register custom post type
	register_post_type( 'myPlugin', 
		array(
			'labels'      => array(
			'name'          => __('My Plugin', 'textdomain'),
			'singular_name' => __('My Plugin', 'textdomain'),
		),
			'public' => 'true',
			'has_archive' => true,
			'show_in_menu' => true
		)
	);
}
add_action( 'init', 'setup_post_type' );

//---------------------------------------------------------
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sample-plugin-activator.php
 */
function activate_sample_plugin() {
	setup_post_type();
	flush_rewrite_rules();
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sample-plugin-activator.php';
	Sample_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sample-plugin-deactivator.php
 */
function deactivate_sample_plugin() {
	unregister_post_type( 'myPlugin' );
	flush_rewrite_rules();
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sample-plugin-deactivator.php';
	Sample_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sample_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_sample_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sample-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sample_plugin() {

	$plugin = new Sample_Plugin();
	$plugin->run();
}
run_sample_plugin();
