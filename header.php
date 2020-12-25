<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'test-theme' ); ?></a>

	<header id="masthead" class="page-header">
	
		<div class="page-header__top container">
      <a class="page-header__logo" href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" width="69" height="32" alt="WP Test Task Logo">
      </a>

			<nav id="site-navigation" class="main-nav">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'test-theme' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'main-nav'
					)
				);
				?>
			</nav><!-- #site-navigation -->

      <a class="page-header__avatar" href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/img/avatar.svg" width="48" height="48" alt="User avatar">
      </a>
    </div>

    <div class="page-header__bottom">
      <div class="container">
				<h1 class="page-header__title">Sed ut perspiciatis unde omnis iste natus error sit</h1>
				<p class="page-header__description">Et has minim elitr intellegat. Mea aeterno eleifend antiopam ad, nam no suscipit quaerendum. At nam minimum ponderum. Est audiam animal molestiae te.</p>
				<div class="page-header-buttons">
					<button class="page-header-buttons__start-now" type="button">Start right now</button>
					<button class="page-header-buttons__learn-more" type="button">Learn more</button>
				</div>
			</div>
    </div>
		
	</header><!-- #masthead -->
