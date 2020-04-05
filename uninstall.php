<?php

/**
 * Fired only when the plugin is un-installed.
 *
 * Removes everything that this plugin added to your db.
 *
 * @category   Core
 * @package    FAFCS
 * @subpackage Uninstaller
 * @author     The Future Aim IT Solutions <info@ateam.host>
 * @license    http://www.gnu.org/licenses/ GNU General Public License
 * @link       https://github.com/ArifulIslam124/Future-Aim-Social-Comment-system
 */
// If uninstall not called from WordPress, then exit. That's it!
defined( 'WPINC' ) or die( 'Damn it.! Dude you are looking for what?' );

// Delete plugin options
if ( get_option( 'fafcs_options' ) ) {
	delete_option( 'fafcs_options' );
}

/******* The end. Thanks for using Future Aim Social Comment system plugin ********/
