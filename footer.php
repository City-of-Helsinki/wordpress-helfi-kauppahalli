<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package kauppahalli
 */
?>
  <footer class="full-width-row">
    <div class="large-12 columns center footer">
      <hr>
      <p><span class="site-name"><?php pll_e('Vanha kauppahalli'); ?></span><span class="hide-for-small">&nbsp;&middot;&nbsp;</span><?php pll_e('Eteläranta'); ?>&nbsp;&middot;&nbsp;<?php pll_e('00130 Helsinki'); ?></p>




     <p><?php pll_e('Avoinna: ma-la klo 10–18'); ?></p>
    </div>
  </footer>
  <?php wp_footer(); ?>
  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <div id="openingtimes-overlay" style="display: none;">
    <div id="modal-container">
      <div id="modal">
        <a href="#" id="modal-close">&times; <?php pll_e('Sulje'); ?></a>
        <?php
        $post = get_page_by_path('special-opening-hours-' . pll_current_language());
        $content = apply_filters('the_content', $post->post_content);
        echo $content;
        ?>
      </div>
    </div>
  </div>



<!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analytics.hel.ninja/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '36']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->

  </body>
</html>
