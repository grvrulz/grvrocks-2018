<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Grvrocks_2018
 */

?>
<?php if ( is_singular() ) : ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' );

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php grvrocks_2018_posted_on(); ?>
				<?php grvrocks_2018_entry_footer(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->

		<?php //grvrocks_2018_post_thumbnail(); ?>

		<div class="entry-content">
			<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'grvrocks-2018' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'grvrocks-2018' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">

		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->

<?php else: ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url(<?php echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>);">
		<header class="entry-header">
			<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

			 ?>
		</header><!-- .entry-header -->

		<?php //grvrocks_2018_post_thumbnail(); ?>

		<div class="entry-content">
			<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'grvrocks-2018' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'grvrocks-2018' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php
			if ( 'post' === get_post_type() ) :
				grvrocks_2018_posted_on();
			endif;
			grvrocks_2018_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->

<?php endif; ?>
