<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Riemann
 */

?>
	
		</div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer mt3" role="contentinfo">
		<div class="width-setter mx-auto p1 px2">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'riemann' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'riemann' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php  
					$this_theme = wp_get_theme();
				?>
				Theme: <span class="theme-name"><?php echo esc_html( $this_theme->get( 'Name' ) )?></span> by <span class="theme-author"><a href="<?php echo esc_html( $this_theme->get( 'AuthorURI' ) )?>">Native Themes</a></span>.
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
