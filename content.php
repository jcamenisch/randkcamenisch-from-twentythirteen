<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Randkcamenisch_Twenty_Thirteen
 * @since R & Camenisch: Twenty Thirteen 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if ( is_single() ) : ?>
    Subscribe via Email:
    <form style="display:inline-block;margin-top:-4px;vertical-align:top"
     action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow"
     onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=kaycamenisch', 'popupwindow', 'scrollbars=yes,width=550,height=520'); return true">
      <input type="text" style="width:140px" name="email">
      <input type="hidden" value="kaycamenisch" name="uri"><input type="hidden" name="loc" value="en_US">
      <button type="submit" value="Subscribe">Go</button>
    </form>
    or <a href="http://feeds.feedburner.com/kaycamenisch"><img src="/wp-content/uploads/2014/02/rss-16.png"></a> <a href="http://feeds.feedburner.com/kaycamenisch">RSS</a>

    <hr>

    <h1 class="entry-title"><?php the_title(); ?></h1>
  <?php else : ?>
    <h2 class="entry-title">
      <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
    </h2>
  <?php endif; ?>

  <p class="post-meta">posted <?= the_date() ?> <? the_tags('under') ?></p>

  <?php if ( is_search() ) : // Only display Excerpts for Search ?>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  <?php else : ?>
    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'randkcamenisch-twentythirteen' ) ); ?>
    <?php wp_link_pages( array(
            'before' => '<div class="page-links"><span class="page-links-title">' .
                        __( 'Pages:', 'randkcamenisch-twentythirteen' ) . '</span>',
            'after' => '</div>',
            'link_before' => '<span>',
            'link_after' => '</span>'
          ) );
    ?>
  <?php endif; ?>

  <footer class="entry-meta">
    <? if ( comments_open() && ! is_single() ) : ?>
      <div class="comments-link">
        <a href="<?php the_permalink(); ?>#disqus_thread" rel="bookmark">Leave a comment</a>
      </div>
    <? elseif ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
      <? get_template_part( 'author-bio' ); ?>
    <? endif; ?>
  </footer>
</article>
