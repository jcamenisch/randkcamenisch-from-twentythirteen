<div class="aside">
  <? get_template_part('partials/meta_navigation'); ?>
</div>
<? /* <r:unless_content part="no-aside"> */ ?>
<? /* <r:if_content part="aside"> */ ?><div class="aside">
  <? /* <r:content part="aside" /> */ ?>
</div><? /* </r:if_content> */ ?>
<? /* <r:unless_content part="aside"> */ ?><div class="aside">
  <? get_template_part('partials/book_highlight'); ?>
</div>
<div class="aside">
  <? get_template_part('partials/video_highlight'); ?>
</div><? /* </r:unless_content> */ ?>
<? /* </r:unless_content> */ ?>
<? /* <r:unless_content part="no-testimonial"> */ ?><div class="aside">
  <? /* <r:if_content part="testimonial"> */ ?><blockquote><? /* <r:content part="testimonial" /> */ ?></blockquote><? /* </r:if_content> */ ?>
  <? /* <r:unless_content part="testimonial"> */ ?><? get_template_part('partials/random_testimonial'); ?><? /* </r:unless_content> */ ?>
</div><? /* </r:unless_content> */ ?>

<?/* From twentythirteen's index.php */?>
<?php get_sidebar( 'main' ); ?>
