<?php
/**
 * The template for displaying posts in the Aside post format
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
    <?php if ( is_single() ) : ?>
      <?php twentythirteen_entry_meta(); ?>

      <?php if ( get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
        <?php get_template_part( 'author-bio' ); ?>
      <?php endif; ?>

    <?php else : ?>
      <?php twentythirteen_entry_date(); ?>
    <?php endif; // is_single() ?>
  </footer><!-- .entry-meta -->
</article><!-- #post -->
