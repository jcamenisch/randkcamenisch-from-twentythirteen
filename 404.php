<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Randkcamenisch_Twenty_Thirteen
 * @since R & Camenisch: Twenty Thirteen 0.1
 */

get_header(); ?>

	<h1 class="page-title"><?php _e( 'Not found', 'randkcamenisch-twentythirteen' ); ?></h1>

	<h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'randkcamenisch-twentythirteen' ); ?></h2>

	<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'randkcamenisch-twentythirteen' ); ?></p>

	<?php get_search_form(); ?>

<?php get_footer(); ?>
