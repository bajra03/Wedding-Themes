<?php
/**
 * Theme functions and definitions
 *
 * @package lvenvl
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define all constant.
define( 'ENVLP_VERSION', '1.0.0' );
define( 'ENVLP_URI', get_template_directory_uri() );
define( 'ENVLP_PATH', get_template_directory() );
define( 'ENVLP_INCLUDES', ENVLP_PATH . '/includes/' );

require_once ENVLP_INCLUDES . 'loader.php';
