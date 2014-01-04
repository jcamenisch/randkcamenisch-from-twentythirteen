<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Randkcamenisch_Twenty_Thirteen
 * @since R & Camenisch: Twenty Thirteen 0.1
 */

get_header(); ?>

	<?php /* The loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'partials/post', get_post_format() ); ?>
		<?php comments_template(); ?>

	<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
