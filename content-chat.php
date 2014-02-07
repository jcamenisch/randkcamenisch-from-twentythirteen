<?php
/**
 * The template for displaying posts in the Chat post format
 *
 * @package WordPress
 * @subpackage Randkcamenisch_Twenty_Thirteen
 * @since R & Camenisch: Twenty Thirteen 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php if ( is_single() ) : ?>
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <?php else : ?>
    <h1 class="entry-title">
      <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
    </h1>
    <?php endif; // is_single() ?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php the_content(); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'randkcamenisch-twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
  </div><!-- .entry-content -->

  <footer class="entry-meta">
    <?php twentythirteen_entry_meta(); ?>
  </footer><!-- .entry-meta -->
</article><!-- #post -->
