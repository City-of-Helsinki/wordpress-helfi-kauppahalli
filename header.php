<!DOCTYPE html>
<!--[if lt IE 9]>         <html class="no-js ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
  <head>
    <link rel="dns-prefetch" href="//fast.fonts.net">
    <link rel="dns-prefetch" href="//cloud.webtype.com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, minimal-ui">
    <meta name="theme-color" content="#4C7568">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_bloginfo('template_url'); ?>/assets/img/favicon.png" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <div class="row topbar" id="mainnavigation">
      <ul class="language-chooser inline-list">
        <?php pll_the_languages(); ?>
      </ul>
      <div class="medium-4 columns nav-big">
        <?php wp_nav_menu( array( 'theme_location' => 'primary_left' ) ); ?>
      </div>
      <div class="medium-4 columns nav-big center">
        <div class="logo"><a href="<?php echo pll_home_url(); ?>"></a></div>
      </div>
      <div class="medium-4 columns nav-big">
        <?php wp_nav_menu( array( 'theme_location' => 'primary_right' ) ); ?>
      </div>
    </div>
