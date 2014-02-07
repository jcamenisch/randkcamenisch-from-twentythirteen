<?php
/**
 * The template for displaying posts in the Quote post format
 *
 * @package WordPress
 * @subpackage Randkcamenisch_Twenty_Thirteen
 * @since R & Camenisch: Twenty Thirteen 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-content">
    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'randkcamenisch-twentythirteen' ) ); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'randkcamenisch-twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
  </div><!-- .entry-content -->

  <footer class="entry-meta">
    <?php twentythirteen_entry_meta(); ?>

    <?php if ( comments_open() && ! is_single() ) : ?>
    <span class="comments-link">
      <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'randkcamenisch-twentythirteen' ) . '</span>', __( 'One comment so far', 'randkcamenisch-twentythirteen' ), __( 'View all % comments', 'randkcamenisch-twentythirteen' ) ); ?>
    </span><!-- .comments-link -->
    <?php endif; // comments_open() ?>
  </footer><!-- .entry-meta -->
</article><!-- #post -->
