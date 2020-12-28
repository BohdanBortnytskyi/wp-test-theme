<?php
/**
 * Template part for displaying testimonials
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test-theme
 */
?>

<li class="advantages__item <?php the_field('advantage_icon'); ?>">
    <h3><?php the_title(); ?></h3>
    <p><?php the_field('advantage_text'); ?></p>
    <?php if(get_field('advantage_discover_link')) { ?>
        <a href="<?php the_field('advantage_discover_link'); ?>">Discover</a>
    <?php } ?>
</li>