<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ikarus_theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ikarus-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Desarrollado con %s', 'ikarus-theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Tema: %1$s por %2$s.', 'ikarus-theme' ), 'Ikarus theme', '<a href="https://ikarus-media.com">Luis Zambrano</a>' );
				?>
		</div><!-- .site-info -->
					<!-- Añadiendo condicional para que muestre menu sólo si hay uno asignado -->
					<?php
					if ( has_nav_menu( 'menu-2' ) ) {
						wp_nav_menu( array('theme_location' => 'menu-2',	'menu_id' => 'footer-menu',	));	
					}
					?>

				
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
