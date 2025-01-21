<?php
/**
 * Loader file for the Lvenvl theme.
 *
 * This file is responsible for loading the theme's classes.
 *
 * @package envlp
 * @author ENVLP
 * @version 1.0
 */

/**
 * Load theme classes.
 *
 * This function loads all the classes that are required by the theme.
 *
 * @since 1.0.0
 */
function envlp_load_classes() {
	$directory = ENVLP_INCLUDES;
	$classes   = array(
		'Envlp_Menu' => 'class-envlp-menu.php',
	);

	foreach ( $classes as $class_name => $class_file ) {
		require_once $directory . $class_file;
		if ( class_exists( $class_name ) ) {
			new $class_name();
		}
	}
}

envlp_load_classes();
