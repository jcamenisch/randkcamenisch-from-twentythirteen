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
  <? wp_footer(); ?>
</body>
</html>
