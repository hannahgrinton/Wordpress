<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hannahgrinton-theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'hannahgrinton-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'hannahgrinton-theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'hannahgrinton-theme' ), 'hannahgrinton-theme', '<a href="http://hannahgrinton.ca">Hannah Grinton</a>' );
				?>
		</div><!-- .site-info -->
		<!-- <div class="footer-menu"><?php //wp_nav_menu( array( 'theme_location' => 'menu-2')); ?></div> -->
		<div class="footer-menu">
			<a href="twitter.com" target="_blank"><i class="fab fa-twitter"></i>&nbsp;Twitter</a>
			<a href="facebook.com" target="_blank"><i class="fab fa-facebook"></i>&nbsp;Facebook</a>
			<a href="pinterest.com" target="_blank"><i class="fab fa-pinterest"></i>&nbsp;Pinterest</a>
			<a href="instagram.com" target="_blank"><i class="fab fa-instagram"></i>&nbsp;Instagram</a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
