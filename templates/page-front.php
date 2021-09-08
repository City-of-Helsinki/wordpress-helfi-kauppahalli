<?php
/**
 * Template Name: Frontpage
 *
 * @package kauppahalli
 */

get_header(); ?>


<?php 
  $merchantsPage = get_permalink(pll_get_post(get_page_by_path('kauppiaat')->ID));
?>
<div class="full-width-row">
  <div class="large-12 columns parallaxtile landing" id="frontpage-landing">
    <div class="bg-img"></div>
    <div class="frontpage-landing-content center">
      <div class="innerbox">
        <div class="logo-emblem"></div>
        <h1>1888</h1>
        <p><?php the_field("hotspot_introduction"); ?></p>
        <a href="<?php echo $merchantsPage ?>" class="button"><?php pll_e('Tutustu'); ?></a>
      </div>
    </div>
  </div>
</div>

<div class="row intro">
  <div class="large-12 columns">
    <?php the_field("introduction"); ?>
    <hr>
    <div class="fb-like-box show-for-medium-up" data-href="https://www.facebook.com/Vanhakauppahalli" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="true"></div>
    <div class="fb-like-box mobile-fb show-for-small-only" data-href="https://www.facebook.com/Vanhakauppahalli" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
  </div>
</div>



<?php get_footer(); ?>