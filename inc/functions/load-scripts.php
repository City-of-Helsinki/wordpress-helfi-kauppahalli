<?php
  /**
   * Enqueue scripts and styles.
   */
  function kauppahalli_scripts() {


    wp_enqueue_style( 'normalize-style', get_template_directory_uri() . "/assets/css/normalize.min.css");
    wp_enqueue_style( 'app-style', get_template_directory_uri() . "/assets/css/app.css");
    wp_enqueue_style( 'webtype-style', "//cloud.webtype.com/css/e6f88c50-03f1-4b0c-a11f-de771e78ea65.css");
    wp_enqueue_style( 'fontscom-style', "//fast.fonts.net/cssapi/12669d98-e411-43b8-9c41-b051acc17224.css");

    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr.min.js');

    if(!is_admin()) {
      wp_deregister_script('jquery');
      wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, true);
      wp_enqueue_script('jquery');
    }

    wp_enqueue_script('foundation', get_template_directory_uri() . '/assets/js/foundation.min.js', array('jquery'), false, true);
    wp_enqueue_script('packery', get_template_directory_uri() . '/assets/js/vendor/packery.pkgd.min.js', array('jquery'), false, true);
    wp_enqueue_script('theme', get_template_directory_uri() . '/assets/js/min/main-ck.js', array('jquery', 'packery', 'foundation'), false, true);

    wp_localize_script('modernizr', 'WPAjax', array( 'url' => admin_url( 'admin-ajax.php' ) ) );
    wp_localize_script('modernizr', 'WPTheme', array('url' => get_stylesheet_directory_uri()) );


  }
  add_action( 'wp_enqueue_scripts', 'kauppahalli_scripts' );
?>
