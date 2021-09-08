<?php
/**
 * Template Name: History
 *
 * @package kauppahalli
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post();
  $background_image = get_field('background_image');
  $background_image_url = $background_image['url']; ?>

  <div class="full-width-row">
    <div class="large-12 columns history-block history-0" style="background-image:url(<?php echo $background_image_url; ?>);"></div>
  </div>

  <?php $index = 0; ?>
  <?php if( have_rows('history_highlight_block') ): ?>
    <?php while ( have_rows('history_highlight_block') ) : the_row(); ?>
      <div class="full-width-row">
        <?php if( get_row_layout() == 'highlight' ):
          $background_image = get_sub_field('background_image');
          $background_image_url = $background_image['url']; ?>
          <div class="large-6 <?php echo ($index % 2 == 1) ? 'large-push-6': ''; ?> columns collapse content textcontent">
            <?php the_sub_field('main_highlight'); ?>
          </div>          
          <div class="large-6 <?php echo ($index % 2 == 1) ? 'large-pull-6': ''; ?> columns history-block history-1" style="background-image:url(<?php echo $background_image_url; ?>);">
            <table class="history">
              <?php if( have_rows('year_highlights') ): ?>
                <?php while ( have_rows('year_highlights') ) : the_row(); ?>
                  <tr><td><?php the_sub_field('year'); ?></td><td><?php the_sub_field('description'); ?></td></tr>
                <?php endwhile; ?>
              <?php endif; ?>
            </table>
            <div class="overlay"></div>
          </div>
          <?php $index++; ?>
        <?php endif; ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>