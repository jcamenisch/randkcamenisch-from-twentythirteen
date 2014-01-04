<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title><? /* <r:title /> */ ?></title>
    <meta name="description" content="<? /* <r:field name="Description" /> */ ?>" />
    <link href="http://feeds.feedburner.com/kaycamenisch" rel="alternate" title="RSS" type="application/rss+xml" />
    <link href="/stylesheets/screen.css?update=20130101" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Qwigley' rel='stylesheet' type='text/css'>
    <!--[if lt IE 7]><style type="text/css" media="screen">@import url("/stylesheets/ie6-.css");</style><![endif]-->
    <!--[if lt IE 9]><style type="text/css" media="screen">@import url("/stylesheets/ie8-.css");</style><![endif]-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
  </head>
  <body class="<? /* <r:slug /> */ ?>">
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
        </div>
      </div>
      <div class="page">
        <div class="main">
          <div class="content-wrapper">
            <div class="content">
              <? get_template_part('partials/content'); ?>
            </div>
            <? get_template_part('partials/sidebar'); ?>
          </div>
          <div style="clear: both"></div>
        </div>
      </div>
      <div class="footer-wrapper">
        <div class="footer">
          <? get_template_part('partials/home_link_navigation'); ?>
          <? get_template_part('partials/resource_navigation'); ?>
          <? get_template_part('partials/meta_navigation'); ?>
          <ul><? /* <r:navigation urls="Site Map: /sitemap|RSS: //feeds.feedburner.com/kaycamenisch"> */ ?>
            <? get_template_part('partials/navigation_li_link'); ?>
          <? /* </r:navigation> */ ?></ul>
          <p>Copyright &copy; <? /* <r:date format="%Y" for="now" /> */ ?> Robert &amp; Kay Camenisch. All rights reserved. Design by <a href="http://camenischcreative.com">Camenisch Creative</a></p>
        </div>
      </div>
    </div>
    <? /* <r:if_field name="javascriptfile"> */ ?><script type="text/javascript" src="<? /* <r:field name="javascriptfile" /> */ ?>"></script><? /* </r:if_field> */ ?>
    <? /* <r:if_content part="javascript"> */ ?><script type="text/javascript">
      <? /* <r:content part="javascript" /> */ ?>
    </script><? /* </r:if_content> */ ?>
  </body>
</html>
