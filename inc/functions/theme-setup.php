<?php
  if ( ! function_exists( 'kauppahalli_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function kauppahalli_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on kauppahalli, use a find and replace
     * to change 'kauppahalli' to the name of your theme in all the template files
     */
    load_theme_textdomain( 'kauppahalli', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
      'primary_left' => __( 'Primary Menu Left', 'kauppahalli' ),
      'primary_right' => __( 'Primary Menu Right', 'kauppahalli' ),
    ) );



    if (function_exists('pll_register_string')) {
      $domain = 'theme';
      pll_register_string('discover', 'Tutustu', $domain);
      pll_register_string('contact_details', 'Yhteystiedot', $domain);
      pll_register_string('read_more', 'Lue lisää', $domain);
      pll_register_string('vanha_kauppahalli', 'Vanha kauppahalli', $domain);
      pll_register_string('etelaranta', 'Eteläranta', $domain);
      pll_register_string('not_found', 'Valitettavasti hakemaasi sivua ei löytynyt.', $domain);
      pll_register_string('postcode_city', '00130 Helsinki', $domain);
      pll_register_string('opening_hours_1', 'Avoinna: Ma-la klo 8–18', $domain);
      pll_register_string('opening_hours_2', 'Mahdollisista poikkeavista aukioloajoista tiedotamme', $domain);
      pll_register_string('opening_hours_3', 'Facebook-sivuillamme', $domain);
      pll_register_string('special_opening_hours', 'Poikkeusaukioloajat', $domain);
      pll_register_string('close', 'Sulje', $domain);
    }


  }
  endif; // kauppahalli_setup
  add_action( 'after_setup_theme', 'kauppahalli_setup' );

  function remove_menus(){

    //remove_menu_page( 'index.php' );                  //Dashboard
    remove_menu_page( 'edit.php' );                   //Posts
    // remove_menu_page( 'upload.php' );                 //Media
    // remove_menu_page( 'edit.php?post_type=page' );    //Pages
    remove_menu_page( 'edit-comments.php' );          //Comments
    // remove_menu_page( 'themes.php' );                 //Appearance
    // remove_menu_page( 'plugins.php' );                //Plugins
    // remove_menu_page( 'users.php' );                  //Users
    // remove_menu_page( 'tools.php' );                  //Tools
    // remove_menu_page( 'options-general.php' );        //Settings

  }
  add_action( 'admin_menu', 'remove_menus' );



 //  add_filter('pll_translated_post_type_rewrite_slugs', function($post_type_translated_slugs) {
 //   // Add translation for "my_post_type".
 //   $post_type_translated_slugs['my_post_type'] = array(
 //     'en' => 'my-english/rewrite-slug',
 //     'fr' => 'my-french/rewrite-slug',
 //   );
 //   return $post_type_translated_slugs;
 // });

?>