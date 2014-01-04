<? get_header(); ?>

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

  <? if ( have_posts() ) : ?>
    <? if ( is_search() ) get_template_part( 'partials/search_header' ); ?>

    <? /* The loop */ ?>
    <? while ( have_posts() ) : the_post(); ?>
      <? get_template_part( 'partials/post', get_post_format() ); ?>
    <? endwhile; ?>

    <? twentythirteen_paging_nav(); ?>
  <? else : ?>
    <? get_template_part( 'partials/post', 'none' ); ?>
  <? endif; ?>

<? get_footer(); ?>
