<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test-theme
 */

?>

<li id="post-<?php the_ID(); ?>" class="blog-posts__item">
	<?php test_theme_post_thumbnail(); ?>

	<?php the_title( '<h3 class="blog-posts__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>

	<p class="blog-posts__description"><?php the_title(); ?></p>
</li>