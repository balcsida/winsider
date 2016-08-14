<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WINSIDER
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray'); ?>>
<!-- 	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'winsider' ); ?></a>
 -->
	<header role="banner">
		<div class="zi2 absolute top-0 left-0 right-0">
			<div class="bg-black white">
				<div class="col-12 sm-col-10 mx-auto">
					<div class="flex justify-between">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="flex items-center text-decoration-none"><h1 class="h2 white ml1 my2 fw-700"><?php bloginfo( 'name' ); ?></h1></a>
						<div class="flex justify-end h2 m0">
							<a href="#" class="flex items-center white facebook p2 text-decoration-none" title="Facebook" aria-label="A WINSIDER a Facebook-on"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>
							<a href="#" class="flex items-center white youtube p2 text-decoration-none" title="YouTube" aria-label="A WINSIDER a YouTube-on"><i class="fa fa-youtube-play fa-fw" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-blue">
				<div class="col-12 sm-col-10 mx-auto">
					<nav class="uppercase bold h5" role="navigation">
						<?php echo strip_tags(wp_nav_menu( array( 'theme_location' => 'header', 'container' => '', 'link_before' => '', 'items_wrap' => '%3$s', 'container' => false , 'echo' => false) ), '<a><div>'); ?>
					</nav>
				</div>
			</div>
		</div>
		<div class="bg-blue fixed top-0 left-0 right-0">
			<div class="flex justify-between sm-col-10 mx-auto">
				<div class="uppercase bold h5 flex flex-wrap items-stretch" role="navigation">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="px1 flex items-center hover-bg-black text-decoration-none" style="margin-top:-.2rem"><h1 class="h2 white m0 fw-700"><?php bloginfo( 'name' ); ?></h1></a>
					<?php echo strip_tags(wp_nav_menu( array( 'theme_location' => 'header', 'container' => '', 'link_before' => '', 'items_wrap' => '%3$s', 'container' => false , 'echo' => false) ), '<a><div>'); ?>
				</div>
				<div class="flex justify-end h2 m0 xs-hide">
					<a href="#" class="flex items-center white facebook p2 text-decoration-none" title="Facebook" aria-label="A WINSIDER a Facebook-on"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>
					<a href="#" class="flex items-center white youtube p2 text-decoration-none" title="YouTube" aria-label="A WINSIDER a YouTube-on"><i class="fa fa-youtube-play fa-fw" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</header>

<div id="page" class="site">
	<div id="content" class="site-content">
