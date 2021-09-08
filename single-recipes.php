<?php
/**
 * The main template file.
 *
 * @package kauppahalli
 */

get_header(); ?>

<div class="row content">
  <div class="large-8 large-offset-2 columns medium-10 medium-offset-1">

    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <h1 class="center"><?php the_title(); ?></h1>
        <?php the_content(); ?>

      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</div>

<?php get_footer(); ?>
