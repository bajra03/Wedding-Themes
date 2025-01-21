<?php
/**
 * File name: includes/class-envlp-menu.php
 *
 * Description: WP Nav Menu related functions
 *
 * @package Envlp
 * @subpackage Menu
 *
 * @since 1.0.0
 */

if ( ! class_exists( 'Envlp_Menu' ) ) {
	/**
	 * Class Envlp_Menu
	 */
	class Envlp_Menu {

		/**
		 * Constructor for the class.
		 */
		public function __construct() {
			add_action( 'after_setup_theme', array( __CLASS__, 'register_menu' ) );
		}

		/**
		 * Registers the header menu.
		 */
		public static function register_menu() {
			register_nav_menus(
				array(
					'header' => esc_html( 'Header Menu', 'envlp' ),
					'footer' => esc_html( 'Footer Menu', 'envlp' ),
				)
			);
		}
	}
}
