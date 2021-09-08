<?php
/**
 *
 * @package kauppahalli
 */

get_header(); ?>


  <?php if ( have_posts() ) : ?>

    <div class="row-wide">
      <div class="large-12 columns">
        <div id="latestitems">
          <?php $index = 1; ?>
          <?php while ( have_posts() ) : the_post(); ?>

            <div class="item <?php echo ($index % 3 == 1) ? "w2" : ""; ?>">
              <?php the_post_thumbnail(); ?>
              <h4><?php the_title(); ?></h4>
              <p><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="button"><?php pll_e('Lue lisää'); ?></a>
            </div>

          <?php $index++; endwhile; ?>
        </div>
      </div>
    </div>

    <?php kauppahalli_paging_nav(); ?>

  <?php else : ?>

    <?php get_template_part( 'content', 'none' ); ?>

  <?php endif; ?>


<?php get_footer(); ?>
