<? /* <r:unless_path matches="^/(blog|about/testimonials)/.+"> */ ?>
  <? /* <r:content /> */ ?>
<? /* </r:unless_path> */ ?>
<? /* <r:if_path matches="^/blog/.+"> */ ?>
  <? /* <r:unless_field name="Author"> */ ?><? /* <r:snippet name="post" /> */ ?><? /* </r:unless_field> */ ?>
  <? /* <r:if_field name="Author"> */ ?><? /* <r:snippet name="quote" /> */ ?><? /* </r:if_field> */ ?>
<? /* </r:if_path> */ ?>
<? /* <r:if_path matches="^/about/testimonials/.+"> */ ?>
  <? /* <r:snippet name="quote" /> */ ?>
<? /* </r:if_path> */ ?>

<?/* From twentythirteen's index.php */?>
<?php if ( have_posts() ) : ?>

  <?php /* The loop */ ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
  <?php endwhile; ?>

  <?php twentythirteen_paging_nav(); ?>

<?php else : ?>
  <?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
