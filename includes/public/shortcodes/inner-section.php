<?php
/**
 * Cherry Inner Section Shortcode.
 *
 * @package    Cherry_Site_Shortcodes
 * @subpackage Shortcodes
 * @author     Cherry Team
 * @copyright  Copyright (c) 2012 - 2016, Cherry Team
 * @link       http://www.cherryframework.com/
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html
 */

/**
 * Class for Inner Section shortcode.
 *
 * @since 1.0.0
 */
class Cherry_Inner_Section_Shortcode extends Cherry_Section_Shortcode {

	/**
	 * A reference to an instance of this class.
	 *
	 * @since 1.0.0
	 * @var object
	 */
	private static $instance = null;

	/**
	 * Constructor method.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->name = 'inner_section';

		Cherry_Main_Shortcode::__construct();
	}

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @return object
	 */
	public static function get_instance() {

		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}
}

Cherry_Inner_Section_Shortcode::get_instance();