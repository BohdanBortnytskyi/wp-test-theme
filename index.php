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
        <?php 
          $advantages_loop = new WP_Query( array( 'post_type' => 'advantages' ));
          /* Start the Loop of advantages */
          while ( $advantages_loop->have_posts() ) :
            $advantages_loop->the_post();

            get_template_part( 'template-parts/content-advantages', get_post_type() );

          endwhile;
        ?>
      </ul>
    </section>

		<section class="testimonials">
      <h2 class="visually-hidden">Testimonials</h2>
      <div class="slider container">
        <ul class="slider__list">
          <?php 
            $testimonials_loop = new WP_Query( array( 'post_type' => 'testimonial' ));
            /* Start the Loop of testimonials */
            while ( $testimonials_loop->have_posts() ) :
              $testimonials_loop->the_post();

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
					/* Start the Loop of blog-posts */
					while ( have_posts() ) :
						the_post();

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
