<?php
/**
 * Template Name: Contact
 *
 * @package kauppahalli
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="row">
  <div class="large-12 columns content center">
  <iframe width="650" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=24.949232339859012%2C60.16507880316354%2C24.956313371658325%2C60.16748865274367&amp;layer=mapnik&amp;marker=60.16628508440349%2C24.952772855758667" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=60.16629&amp;mlon=24.95277#map=18/60.16628/24.95277">Näytä isommalla kartalla</a></small>
  </div>
</div>
<div class="row">
  <div class="large-10 large-offset-1 columns content center">
    <?php the_content(); ?>
  </div>
</div>


<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
