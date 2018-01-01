<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Grvrocks_2018
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-widgets">
			<aside class="widget-area footer-widgets-1">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</aside><!-- #secondary -->
			<aside class="widget-area footer-widgets-2">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</aside><!-- #secondary -->
		</div>
		<div class="site-info">
			<span>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'grvrocks-2018' ) ); ?>"><?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'grvrocks-2018' ), 'WordPress' );
				?></a>
			</span>
			<span>
				<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Built with all the love in the world', 'grvrocks-2018' ) );
				?>
			</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
