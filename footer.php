<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test-theme
 */
global $test_theme_opt;
?>

	<footer id="colophon" class="page-footer">
		<div class="container">
      <div class="page-footer__top">
        <div class="page-footer__wrapper">
          <a class="page-header__logo" href="<?php echo home_url('/'); ?>">
            <?php $custom_logo_footer = $test_theme_opt['test-theme-logo-footer']['url']; ?>
            <?php if($custom_logo_footer) { ?>
              <img src="<?php echo esc_url($custom_logo_footer); ?>" alt="WP Test Task Logo">
            <?php } else {?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.svg" width="69" height="32" alt="WP Test Task Logo">
            <?php } ?>
          </a>
          <p class="page-footer__copyright">Copyright © 2020. LogoIpsum. All rights reserved.</p>
        </div>
        <div class="services">
          <h3>Services</h3>
          <ul class="services__list">
            <li><a href="#">Email Marketing</a></li>
            <li><a href="#">Campaigns</a></li>
            <li><a href="#">Branding</a></li>
            <li><a href="#">Offline</a></li>
          </ul>
        </div>
        <div class="about">
          <h3>About</h3>
          <ul class="about__list">
            <li><a href="#">Our Story</a></li>
            <li><a href="#">Benefits</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
        </div>
        <button id="button-top" class="button-footer button-top" type="button"></button>
      </div>
      <div class="page-footer__bottom">
        <div class="page-footer__subscribe">
          <h3>Subscribe to our newsletter</h3>
          <form class="subscribe-form" method="post">
            <input type="email" name="email" placeholder="Email address">
            <button class="button-footer button-send" type="submit"></button>
          </form>
        </div>
        <ul class="page-footer__social-links">
          <li>
            <a href="<?php echo $test_theme_opt['test-theme-facebook']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" width="8" height="16" alt="Facebook"></a>
          </li>
          <li>
            <a href="<?php echo $test_theme_opt['test-theme-twitter']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" width="20" height="16" alt="Twitter"></a>
          </li>
          <li>
            <a href="<?php echo $test_theme_opt['test-theme-instagram']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" width="16" height="16" alt="Instagram"></a>
          </li>
        </ul>
      </div>
    </div>
	</footer><!-- #colophon -->

	<section class="popup popup--login">
			<div class="popup__wrapper">
				<h2>Log in</h2>
				<form class="login-form" method="post">
					<p>
						<label for="login-form__email">Email:</label>
						<input id="login-form__email" class="login-form__email" type="email" name="email" required>
					</p>
					<p>
						<label for="login-form__password">Password:</label>
						<input id="login-form__password" class="login-form__password" type="password" name="password" required>
					</p>
					<button type="submit" class="login-form__submit">Submit</button>
					<p>
						<input type="checkbox" id="login-form__remember" class="login-form__remember" name="remember-me" value="remember" checked>
						<label for="login-form__remember">remember me</label>
					</p>
				</form>
			</div>
			<button type="button" class="popup__button-close" aria-label="Close popup"></button>
		</section>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
