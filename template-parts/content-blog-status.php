<?php
/**
 * Template part for displaying post format - status.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Riemann
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array() ); ?>>
	<div class="post-format-icon">
		<span class="dashicons dashicons-format-status"></span>
	</div>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php riemann_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_excerpt( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'riemann' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'riemann' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<a class="read-more" href="<?php echo the_permalink(); ?>">Read More</a>
	<footer class="entry-footer">
		<?php riemann_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
