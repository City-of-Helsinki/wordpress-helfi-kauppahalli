<?php
/**
 * The template for displaying all pages.
 *
 * @package kauppahalli
 */

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="medium-8 large-8 columns" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->

<?php get_footer(); ?>
