<?php
/**
 * Footer template file
 *
 * This file contains the HTML structure for the footer section of the website.
 *
 * @package lvenvl
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$footer_menu = wp_nav_menu(
	array(
		'theme_location' => 'footer',
		'fallback_cb'    => false,
		'echo'           => false,
	)
);
?>

	<footer id="site-footer" class="site-footer" role="contentinfo">
		<?php if ( $footer_menu ) { ?>
			<nav class="site-navigation" role="navigation">
				<?php
				// PHPCS - escaped by WordPress with "wp_nav_menu".
				echo $footer_menu; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				?>
			</nav>
		<?php } ?>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
