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
      <cite class="testimonial-author"><?php the_field('testimonial_authors_name'); ?></cite> at <cite class="testimonial-company"><?php the_field('testimonial_authors_company'); ?></cite>
    </figcaption>
  </figure>
</li>