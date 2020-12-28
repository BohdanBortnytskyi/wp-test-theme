<?php
/**
 * Template part for displaying testimonials
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test-theme
 */
?>

<li class="slider__item">
<img src="<?php echo the_post_thumbnail_url(); ?>" alt="Testimonial image">
  <figure>
    <blockquote><?php the_content(); ?></blockquote>
    <figcaption>
      <cite class="testimonial-author"><?php the_title(); ?></cite>
    </figcaption>
  </figure>
</li>