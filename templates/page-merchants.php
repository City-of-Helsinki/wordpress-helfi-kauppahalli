<?php
/**
 * Template Name: Merchants
 *
 * @package kauppahalli
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="row content">
  <div class="large-4 columns stickynav hide-for-small hide-for-medium" data-magellan-expedition="fixed">

    <div class="numbers">
      <?php if( have_rows('merchants') ): ?>
        <?php $index = 1; ?>
        <?php while ( have_rows('merchants') ) : the_row(); ?>
          <a href="#<?php echo $index; ?>" data-magellan-arrival="<?php echo $index; ?>"><?php echo $index; ?></a>
          <?php $index++; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="map">

    </div>
  </div>

  <div class="large-8 columns merchant-container">

    <?php if( have_rows('merchants') ): ?>
      <?php $index = 1; ?>
      <?php while ( have_rows('merchants') ) : the_row(); ?>
        <div class="merchant">
        <?php echo ($index !== 1) ? "<hr>" : "" ; ?>
        <a name="<?php echo $index; ?>" data-magellan-destination="<?php echo $index; ?>"></a>
        <h2><i class="number"><?php echo $index; ?></i> <?php the_sub_field("merchant_name"); ?></h2>
        <?php the_sub_field("merchant_description"); ?>

        <h3><?php pll_e('Yhteystiedot'); ?></h3>
        <?php if( have_rows('contact_information') ): ?>
          <ul class="contacts">
          <?php while ( have_rows('contact_information') ) : the_row(); ?>

            <li><?php the_sub_field("detail"); ?></li>

          <?php endwhile; ?>
          </ul>
        <?php endif; ?>
        <?php $index++; ?>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</div>


<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>