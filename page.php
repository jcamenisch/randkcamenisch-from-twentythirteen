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
          <? /* <r:find url="/"> */ ?><? get_template_part('partials/main_menu'); ?><? /* </r:find> */ ?>
          <?/* From twentythirteen's index.php */?>
          <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
          <? _e( 'Menu', 'twentythirteen' ); ?>
          <? wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
        </div>
        <ul class="soc">
          <li><a class="soc-rss" href="http://feeds.feedburner.com/kaycamenisch"></a></li>
          <li><a class="soc-email1" href="http://feedburner.google.com/fb/a/mailverify?uri=kaycamenisch&loc=en_US"></a></li>
          <li><a class="soc-twitter soc-icon-last" href="https://twitter.com/KayCamenisch"></a></li>
        </ul>
      </div>
      <div class="page">
        <div class="main">
          <div class="content-wrapper">
            <div class="content">
              <?php /* The loop */ ?>
              <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <header class="entry-header">
                    <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                      <div class="entry-thumbnail">
                        <?php the_post_thumbnail(); ?>
                      </div>
                    <?php endif; ?>

                    <h1 class="entry-title"><?php the_title(); ?></h1>
                  </header><!-- .entry-header -->

                  <div class="entry-content">
                    <?php the_content(); ?>

                    <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'randkcamenisch-twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                  </div>
                </article><!-- #post -->

                <?php comments_template(); ?>

                <? foreach (get_post_meta(get_the_ID(), 'js_file') as $js_file) { ?>
                  <script type="text/javascript" src="<?= get_template_directory_uri() . "/js/$js_file" ?>"></script>
                <? } ?>
                <? foreach (get_post_meta(get_the_ID(), 'js') as $js) { ?>
                  <script>
                    <?= $js ?>
                  </script>
                <? } ?>
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
  
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-1087558-4']);
      _gaq.push(['_setDomainName', '.randkcamenisch.com']);
      _gaq.push(['_trackPageview']);
      (function(d) {
        var ga = d.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == d.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = d.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })(document);
    </script>

</body>
</html>
