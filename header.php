<?php
/**
 * Header file for the Lvenvl theme.
 *
 * This file contains the HTML header and navigation menu for the theme.
 *
 * @package lvenvl
 * @author LVENVL
 * @version 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$site_name   = get_bloginfo( 'name' );
$tagline     = get_bloginfo( 'description', 'display' );
$header_menu = wp_nav_menu(
	array(
		'theme_location' => 'header',
		'fallback_cb'    => false,
		'echo'           => false,
	)
);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<a href="#content" class="skip-link screen-reader-text">
		<?php esc_html_e( 'Skip to content', 'lvenvl' ); ?>
	</a>

	<header class="site-header" id="site-header" role="banner">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) { ?>
				<?php the_custom_logo(); ?>
			<?php } elseif ( $site_name ) { ?>
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( __( 'Home', 'lvenvl' ) ); ?>" rel="home">
						<?php echo esc_html( $site_name ); ?>
					</a>
				</h1>
				<?php if ( $tagline ) { ?>
					<p class="site-description">
						<?php echo esc_html( $tagline ); ?>
					</p>
				<?php } ?>
			<?php } ?>
		</div>

		<?php if ( $header_menu ) { ?>
			<nav class="site-navigation" role="navigation">
				<?php
				// PHPCS - escaped by WordPress with "wp_nav_menu".
				echo $header_menu; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				?>
			</nav>
		<?php } ?>
	</header>
