<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package halt-site
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="cover"></div>
		<div class="inside">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/halt-theme@2x.png" alt="<?php bloginfo( 'name' ); ?>" width="123">
				</a>
			</div>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Menu', 'halt-site' ); ?></h1>
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'halt-site' ); ?></a>

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>

		<div class="inside intro">
			<h2>Supporting your products should be easy.</h2>
			<h3><span>Halt</span>, intends to do that.</h3>

			<p>Halt, is a custom help desk based on World’s best publishing software WordPress, which makes it easy to assist your customers right on your site, without much of hassle. With Halt you will have full freedom to build your own Support Forum and starts assisting, right away.</p>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
