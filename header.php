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
<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7156032/736184/css/fonts.css" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="cover"></div>
		<div class="inside">
			<div class="site-branding">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
				<g>
					<path d="M49.301,89.18c-1.44-0.015-2.882-0.109-4.31-0.285C24.097,86.354,8.963,67.73,10.177,46.708
						c0.163-2.835,0.318-6.99-3.695-7.479c-4.017-0.487-5.115,3.057-5.339,6.054c-1.98,26.219,16.767,49.615,42.762,52.781
						c1.923,0.234,3.867,0.35,5.808,0.354c3.135,0,7.184-0.357,6.936-4.926C56.395,88.859,52.391,89.213,49.301,89.18z"/>
					<path d="M75.271,54.923c3.514,0,4.658-3.003,4.526-5.86c-0.76-16.392-14.11-29.452-30.461-29.452
						c-16.44,0-29.843,13.201-30.471,29.719c-0.1,2.645,0.786,5.593,4.38,5.593c3.51,0,4.577-3.086,4.745-5.777
						c0.708-11.329,9.997-20.298,21.346-20.298c11.504,0,20.89,9.217,21.368,20.763C70.818,52.33,72.09,54.923,75.271,54.923z"/>
					<path d="M91.633,25.704C78.326,2.33,49.016-5.84,25.835,7.2c-2.259,1.273-3.784,4.057-2.254,6.742
						c1.724,3.029,4.602,2.478,6.908,1.203c18.81-10.413,42.486-3.748,53.258,15.176c10.772,18.923,4.63,43.048-13.665,54.363
						c-2.246,1.391-4.156,3.644-2.432,6.674c1.535,2.699,4.68,2.733,6.9,1.379C97.268,78.893,104.936,49.072,91.633,25.704z"/>
					<ellipse cx="49.451" cy="50.402" rx="4.552" ry="4.616"/>
				</g>
				</svg>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<h1>Halt</h1>
				</a>
			</div>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Menu', 'halt-site' ); ?></h1>
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'halt-site' ); ?></a>

				<?php if( has_nav_menu( 'primary' ) ) : ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				<?php endif; ?>
			</nav><!-- #site-navigation -->
		</div>

		<div class="inside intro">
			<h2>Providing support for your products should be easy.</h2>
			<h3><span>Halt</span>, intends to help you do precisely that.</h3>

			<p>Halt, is an customer support solution built on the world’s best content management platform - WordPress. Halt gives you an easy and hassle-free way to assist your customers right from your website and the freedom to build your own Support Forum and assist customers instantly.</p>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
