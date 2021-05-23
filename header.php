<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ikarus_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ikarus-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<?php 
		if (is_home() || is_front_page()) { 
		?>
	<figure><?php the_header_image_tag(); ?></figure>
		<?php 
		}
		?>
		
		<div class="header-content">
			<div class="header-logo">
				<?php if (has_custom_logo() )  {
					the_custom_logo();
				} else { ?>				
					<img src="<?php echo get_template_directory_uri ();?>/images/bin/Logo-carpinter.webp" alt="Logo">
				<?php }	?>
			</div>		
			<div class="site-branding">
				<?php
				
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><strong><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></strong></p>
					<?php
				endif;
				$ikarus_theme_description = get_bloginfo( 'description', 'display' );
				if ( $ikarus_theme_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $ikarus_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'ikarus-theme' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
