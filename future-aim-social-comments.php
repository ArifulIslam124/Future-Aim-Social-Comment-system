<?php
/**
 * Plugin Name:     Future Aim Social Comment system
 * Plugin URI:      https://github.com/ArifulIslam124/Future-Aim-Social-Comment-system
 * Description:     Light weight Facebook comments with lazy load facility. It loads comments after user clicking on a button or scrolling down. It saves page load time.
 * Version:         1.0.6
 * Author:          Ariful Islam
 * Author URI:      https://arifulsh.com
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:     Future-Aim-Facebook-Comment-system
 * Domain Path:     /languages
 *
 * Future Aim Social Comment system is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Future Aim Social Comment system is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Future Aim Social Comment system. If not, see <http://www.gnu.org/licenses/>.
 *
 * @category   Core
 * @package    FAFCS
 * @author     The Future Aim IT Solutions <info@ateam.host>
 * @license    http://www.gnu.org/licenses/ GNU General Public License
 * @link       https://github.com/ArifulIslam124/Future-Aim-Social-Comment-system
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die( 'Damn it.! Dude you are looking for what?' );
}

if ( ! class_exists( 'Future_Aim_Facebook_Comments' ) ) {

	// Constants array
	$constants = array(
		'FAFCS_PATH'             => plugins_url( '', __FILE__ ),
		'FAFCS_PLUGIN_DIR'       => dirname( __FILE__ ),
		'FAFCS_SETTINGS_PAGE'    => admin_url( 'admin.php?page=fafcs-settings' ),
		'FAFCS_VERSION'          => '1.0.6',
		'FAFCS_ADMIN_PERMISSION' => 'manage_options'
	);

	foreach ( $constants as $constant => $value ) {
		// Set constants if not set already
		if ( ! defined( $constant ) ) {
			define( $constant, $value );
		}
	}

	/**
	 * The code that runs during plugin activation.
	 *
	 * @return void
	 */
	function fafcs_activate_plugin() {

		require_once plugin_dir_path( __FILE__ ) . 'includes/class-fafcs-activator.php';

		FAFCS_Activator::activate();
	}

	// Run activation hook
	register_activation_hook( __FILE__, 'fafcs_activate_plugin' );

	// The core plugin class that is used to define
	// dashboard-specific hooks, and public-facing site hooks.
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-future-aim-social-comments.php';

	/**
	 * Begins execution of the plugin.
	 *
	 * Since everything within the plugin is registered via hooks,
	 * then kicking off the plugin from this point in the file does
	 * not affect the page life cycle.
	 *
	 * @since    2.0.0
	 *
	 * @return void
	 */
	function fafcs_run_plugin() {

		$plugin = new Future_Aim_Facebook_Comments();
		$plugin->run();
	}

	fafcs_run_plugin();
}

//*** Thank you for your interest in Future Aim Social Comment system - Developed and managed by Ariful Islam ***//
