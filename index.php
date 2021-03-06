<?php
/**
 * The main template file.
 *
 *
 * @package kauppahalli
 */

get_header(); ?>


	<div id="primary" class="content-area row">
		<main id="main" class="medium-8 large-8 columns" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php kauppahalli_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
    <?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php get_footer(); ?>
