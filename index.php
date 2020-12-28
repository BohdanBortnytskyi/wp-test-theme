<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test-theme
 */

get_header();
?>

	<main id="primary" class="page-main">

		<section class="advantages container">
      <h2>Grow your business with better Shipping</h2>
      <p class="section-description advantages__description">We help the world’s leading organizations follow their shipping</p>
      <ul class="advantages__list">
        <li class="advantages__item advantages__item--briefcase">
          <h3>Doloremque laudantium</h3>
          <p>At eripuit signiferumque sea, vel ad mucius molestie, cu labitur iuvaret vulputate sed.</p>
          <a href="#">Discover</a>
        </li>
        <li class="advantages__item advantages__item--life-buoy">
          <h3>Nemo enim ipsam</h3>
          <p>At eripuit signiferumque sea, vel ad mucius molestie, cu labitur iuvaret vulputate sed.</p>
          <a href="#">Discover</a>
        </li>
        <li class="advantages__item advantages__item--tool">
          <h3>Numquam eius modi</h3>
          <p>At eripuit signiferumque sea, vel ad mucius molestie, cu labitur iuvaret vulputate sed.</p>
          <a href="#">Discover</a>
        </li>
      </ul>
    </section>

		<section class="testimonials">
      <h2 class="visually-hidden">Testimonials</h2>
      <div class="slider container">
        <ul class="slider__list">
          <?php $loop = new WP_Query( array( 'post_type' => 'testimonial' )); ?>
          <?php 
            /* Start the Loop */
            while ( $loop->have_posts() ) :
              $loop->the_post();

              get_template_part( 'template-parts/content-testimonial', get_post_type() );

            endwhile;
          ?>
        </ul>
        <div class="slider__controls">
          <button type="button" class="prev-slide" aria-label="Previous Slide"></button>
          <button type="button" class="next-slide" aria-label="Next Slide"></button>
        </div>
      </div>
    </section>

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
			?>

			<section class="blog-posts container">
				<h2>At vero eos et accusamus et iusto odio</h2>
				<p class="section-description blog-posts__description">We help the world’s leading organizations follow their shipping</p>
				<ul class="blog-posts__list">
          <?php 
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</ul>
		</section>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
