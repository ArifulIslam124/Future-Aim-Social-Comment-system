<?php

// Abort is called directly. Alla pinne!
defined( 'WPINC' ) or die( 'Damn it.! Dude you are looking for what?' );

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @category   Core
 * @package    FAFCS
 * @subpackage Internationalization
 * @author     The Future Aim IT Solutions <info@ateam.host>
 * @license    http://www.gnu.org/licenses/ GNU General Public License
 * @link       https://github.com/ArifulIslam124/Future-Aim-Social-Comment-system
 */
class FAFCS_i18n {

	/**
	 * The domain specified for this plugin.
	 *
	 * @since  2.0.0
	 * @access private
	 * @var    string $domain The domain identifier for this plugin.
	 */
	private $domain;

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since 2.0.0
	 *
	 * @return void
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			$this->domain,
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);
	}

	/**
	 * Set the domain equal to that of the specified domain.
	 *
	 * @param string $domain The domain that represents the locale of this plugin.
	 *
	 * @since 2.0.7
	 *
	 * @return void
	 */
	public function set_domain( $domain ) {

		$this->domain = $domain;
	}
}
