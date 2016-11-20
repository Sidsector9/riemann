<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Riemann
 */

get_header(); ?>

	<div id="primary" class="content-area  col col-12 sm-col-12 lg-col-12">
		<main id="main" class="site-main" role="main">

			<article class="post error404">
				<h1 class="error404-message">404 ERROR, page not found</h1>
				<div class="sad-face">
					<?php echo esc_html( "( > _ < )" ); ?>
				</div>
				<div class="visit-home">
					Go to: <a href="<?php echo esc_url( home_url('/') );?>">Home</a>
				</div>
				<div class="or">OR</div>
				<?php get_search_form(); ?>
			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
