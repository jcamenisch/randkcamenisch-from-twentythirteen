<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Randkcamenisch_Twenty_Thirteen
 * @since R & Camenisch: Twenty Thirteen 0.1
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <? language_attributes(); ?>>
<!--<![endif]-->
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><? wp_title( '|', true, 'right' ); /* <r:title /> */ ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta name="description" content="<? /* <r:field name="Description" /> */ ?>" />
    <link href="http://feeds.feedburner.com/kaycamenisch" rel="alternate" title="RSS" type="application/rss+xml" />
    <link href='http://fonts.googleapis.com/css?family=Qwigley' rel='stylesheet' type='text/css'>
    <!--[if lt IE 7]><style type="text/css" media="screen">@import url("/stylesheets/ie6-.css");</style><![endif]-->
    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
      <style type="text/css" media="screen">@import url("/stylesheets/ie8-.css");</style>
    <![endif]-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

    <?php wp_head(); ?>
  </head>
  <body class="<? body_class(); /* <r:slug /> */ ?>">
    <div class="wrapper">
      <div class="header-wrapper">
        <div class="header">
          <h1>
            <a href="/" title="Return to Home page">
              <span class="randk">Robert &amp; Kay</span>
              <span class="camenisch">Camenisch</span>
            </a>
            <span class="tagline">encouraging and equipping relationships</span>
          </h1>
        </div>
      </div>

      <div class="nav-wrapper">
        <div class="nav">
          <? get_template_part('partials/home_link_navigation'); ?>
          <? get_template_part('partials/main_menu'); ?>
          <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
          <? _e( 'Menu', 'twentythirteen' ); ?>
          <? wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
        </div>
      </div>

      <div class="page">
        <div class="main">
          <div class="content-wrapper">
            <div class="content">
              <?php /* The loop */ ?>
              <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', get_post_format() ); ?>
                <?php comments_template(); ?>

              <?php endwhile; ?>
            </div>

            <? get_template_part('partials/sidebar'); ?>
          </div>

          <div style="clear: both"></div>
        </div>
      </div>

      <div class="footer-wrapper">
        <div class="footer">
          <? wp_nav_menu( array( 'theme_location' => 'secondry', 'menu_class' => 'footer-menu' ) ); ?>

          <p>Copyright &copy; <? /* <r:date format="%Y" for="now" /> */ ?> Robert &amp; Kay Camenisch. All rights reserved. Design by <a href="http://camenischcreative.com">Camenisch Creative</a></p>
        </div>
      </div>
    </div>

    <? wp_footer(); ?>

  </body>
</html>


