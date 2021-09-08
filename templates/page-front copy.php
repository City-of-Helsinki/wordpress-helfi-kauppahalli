<?php
/**
 * Template Name: Frontpage
 *
 * @package kauppahalli
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
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
        <span class="hide-for-small"><a href="#" id="frontpage-toggle" class="button"><?php pll_e('Tutustu'); ?></a></span>
      </div>
      <div class="hotspotcontainer">
        <a href="<?php echo $merchantsPage; ?>#20" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Kalakauppa E. Eriksson'); ?>" style="left: 20%; top: 7%;"></a>
        <a href="<?php echo $merchantsPage; ?>#7" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('S-Maria'); ?>" style="left: 80%; top: 3%;"></a>
        <a href="<?php echo $merchantsPage; ?>#11" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Annan villiliha'); ?>" style="left: 55%; top: 20%;"></a>
        <a href="<?php echo $merchantsPage; ?>#24" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Kalaliike Marja Nätti'); ?>" style="left: 25%; top: 65%;"></a>
        <a href="<?php echo $merchantsPage; ?>#13" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Röntgen Café &amp; Conditorei'); ?>" style="left: 27%; top: 70%;"></a>
        <a href="<?php echo $merchantsPage; ?>#5" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Soppakeittiö'); ?>" style="left: 75%; top: 40%;"></a>
        <a href="<?php echo $merchantsPage; ?>#23" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Andström'); ?>" style="left: 19%; top: 42%;"></a>
        <a href="<?php echo $merchantsPage; ?>#14" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Scandinavia Cafe'); ?>" style="left: 48%; top: 42%;"></a>
        <a href="<?php echo $merchantsPage; ?>#22" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Kultasuklaa'); ?>" style="left: 20%; top: 78%;"></a>
        <a href="<?php echo $merchantsPage; ?>#12" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Story'); ?>" style="left: 64%; top: 80%;"></a>
        <a href="<?php echo $merchantsPage; ?>#6" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Café-Tienda España'); ?>" style="left: 82%; top: 91%;"></a>
        <a href="<?php echo $merchantsPage; ?>#15" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Pajuniemi'); ?>" style="left: 71%; top: 67%;"></a>
        <a href="<?php echo $merchantsPage; ?>#21" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Stadin herkut'); ?>" style="left: 30%; top: 107%;"></a>
        <a href="<?php echo $merchantsPage; ?>#18" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Vihannes- ja hedelmäkauppa Putilin'); ?>" style="left: 55%; top: 110%;"></a>
        <a href="<?php echo $merchantsPage; ?>#4" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Vegetaari'); ?>" style="left: 50%; top: 120%;"></a>
        <a href="<?php echo $merchantsPage; ?>#10" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Merja Valo'); ?>" style="left: 65%; top: 102%;"></a>
        <a href="<?php echo $merchantsPage; ?>#3" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Mari´s Smoothie'); ?>" style="left: 73%; top: 111%;"></a>
        <a href="<?php echo $merchantsPage; ?>#10" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Piparkakkuja'); ?>" style="left: 10%; top: 124%;"></a>
        <a href="<?php echo $merchantsPage; ?>#2" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Konditoria Matti ja Mari'); ?>" style="left: 30%; top: 127%;"></a>
        <a href="<?php echo $merchantsPage; ?>#17" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Hongiston leipämyymälä'); ?>" style="left: 72%; top: 123%;"></a>
        <a href="<?php echo $merchantsPage; ?>#9" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Juustokauppa Tuula Paalanen'); ?>" style="left: 65%; top: 147%;"></a>
        <a href="<?php echo $merchantsPage; ?>#8" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Alko'); ?>" style="left: 84%; top: 137%;"></a>
        <a href="<?php echo $merchantsPage; ?>#1" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Roberts Coffee'); ?>" style="left: 75%; top: 153%;"></a>
        <a href="<?php echo $merchantsPage; ?>#16" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Bahram'); ?>" style="left: 75%; top: 163%;"></a>
        <a href="<?php echo $merchantsPage; ?>#19" class="hotspot" data-tooltip class="has-tip" title="<?php pll_e('Pot-Pan'); ?>" style="left: 60%; top: 165%;"></a>
      </div>
    </div>
  </div>
</div>

<div class="row intro">
  <div class="large-12 columns">
    <hr>
    <?php the_field("introduction"); ?>
    <hr>

    <div class="fb-like-box show-for-medium-up" data-href="https://www.facebook.com/Vanhakauppahalli" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="true"></div>
    <div class="fb-like-box mobile-fb show-for-small-only" data-href="https://www.facebook.com/Vanhakauppahalli" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>


</div>
</div>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
