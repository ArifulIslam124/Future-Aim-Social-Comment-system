<?php

// If this file is called directly, abort.
defined( 'WPINC' ) or die( 'Damn it.! Dude you are looking for what?' );

/**
 * The public-facing functionality of the plugin.
 *
 * @category   HTML
 * @package    FAFCS
 * @subpackage Public
 * @author     The Future Aim IT Solutions <info@ateam.host>
 * @license    http://www.gnu.org/licenses/ GNU General Public License
 * @link       https://github.com/ArifulIslam124/Future-Aim-Social-Comment-system
 */

// get our plugin options from db
$options = get_option( 'fafcs_options' );

// comments width
$width = ! empty( $options['box_width'] ) ? $options['box_width'] : '100%';
// comments div class
$div_class = ! empty( $options['div_class'] ) ? $options['div_class'] : 'comments-area';
// comments loading method
$load_on = ( $options['load_on'] == 'click' ) ? 'click' : 'scroll';
// button text
$btn_text = ! empty( $options['button_text'] ) ? $options['button_text'] : 'Load Comments';

// add comments area only if Application ID is given
if ( ! empty( $options['app_id'] ) ) { ?>

	<div id="fafcs_comments" class="<?php echo $div_class; ?>" align="center">
		<?php if ( $load_on == 'click' ) { ?>
			<button id="fafcs_button" class="btn button fafcs-btn" onclick="loadFAFCSComments();"><?php echo $btn_text; ?></button>
		<?php } ?>
	</div>

<?php }