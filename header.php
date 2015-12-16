<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pp
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<script src="//use.typekit.net/bjp5adx.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body <?php body_class(); ?>>
<section id="page" class="hfeed site">

	<header id="header">

		<div class="site-header" role="banner">
			<div class="site-branding">

			<div class="logo">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 40.1 39.5" style="enable-background:new 0 0 40.1 39.5;" xml:space="preserve">
				<path class="st0" d="M11.6,32.3L11.6,32.3c0.6-1.2,1.6-1.9,2.7-2.7c1.5-1.1,1.6-1.2,2.7-0.1c0.8-0.1,1.4-0.2,2.2-0.4
					c0.3,2.5,0.7,5,1,7.5c0,0,0.1,0,0.1-0.1c0.1-0.1,0.1-0.2,0.1-0.4l0,0c1,0.6-0.1,1.2,0,1.7c1.3,0,2.5,0,3.9,0
					c-1.9-2.1-2.3-5.4-1.1-7.5c1.1,1.9,2.1,3.8,3.2,5.7c0.3-0.1,0.5-0.2,0.7-0.3c0.6,1.8,1.5,2.2,2.9,1.3c-0.6-1-1.2-2.1-1.9-3.1
					c-1.6-2.3-1.6-4.8-0.5-7.2c0.7-1.6,1-3.2,1.2-4.8c0.4-3.3,1.4-4.3,4.7-4.3c2.1,0,4-0.4,5.7-1.8c1.1-0.9,1.2-1.6,0-2.3
					c-1.1-0.7-1.7-1.5-1.8-2.8c-0.1-2-1-3.7-2.6-4.7c-1.8-1-3-2.4-4-4c-0.5-0.8-1.3-1.4-2.3-1.2c-1.1,0.3-1.8,1-2.1,2.1
					c-0.2,0.7-0.1,1.5-0.2,2.1c-0.8-0.1-1.7-0.3-2.6-0.3c-1.2-0.1-2.3,0.2-2.8,1.4c-0.5,1.1,0.1,2.1,0.8,2.9c0.5,0.6,1.1,1.1,1.8,1.7
					c-0.9,1.3-1.9,2.7-2.8,3.9c-3-1.1-4.1-1.3-5.7-1.1c-4.5,0.3-7.9,2.4-10.4,6c-1,1.4-2.1,2.6-3.7,3.2c-0.2,0.1-0.3,0.3-0.7,0.5
					c0.7,0,1.2,0,1.8,0c-0.4,0.5-0.7,0.8-1,1.1c-0.3,0.3-0.6,0.6-0.9,0.9c0,0.1,0.1,0.2,0.1,0.3c0.6-0.1,1.1-0.1,1.7-0.2
					c-0.3,0.5-0.5,0.8-0.7,1.2c0,0.1,0.1,0.1,0.1,0.2c0.4-0.2,0.9-0.4,1.4-0.7c0,0.6,0,1.2,0,2c0.4-0.5,0.6-0.8,0.8-1.1
					C6,28,6.2,29,4.7,31.1c-1,1.4-1.2,3.1-1.1,4.7c0,0.3,0.4,0.6,0.6,0.8c0.3,0,0.5,0,0.8,0.1c0.5,0.7,0.5,1.9,1.7,2c1,0,1.9,0,2.9,0
					c0.1-0.1,0.1-0.1,0.2-0.2C8,37,7.4,35.2,8.6,33c0.2,0.3,0.4,0.4,0.6,0.6l0,0c0.7,2.8,2.6,4.1,5.2,3.6C13.5,35.6,12.6,34,11.6,32.3z"
					/>
				</svg>
			</div>


			</div><!-- .site-branding -->

			<div class="menu-section">
				<div class="cinfo">
					<ul>
						<li><?php the_field('phone', 'option'); ?></li>
						<li><a href="mailto:<?php antispambot(the_field('email', 'option'), 1) ?>"><?php antispambot(the_field('email', 'option'), 1); ?></a></li>
					</ul>
				</div>

				<div class="menu-toggle">
					<div class="one"></div>
					<div class="two"></div>
					<div class="three"></div>
				</div>
				<nav>
					<div class="menu-logo">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 40.1 39.5" style="enable-background:new 0 0 40.1 39.5;" xml:space="preserve">
						<path class="st0" d="M11.6,32.3L11.6,32.3c0.6-1.2,1.6-1.9,2.7-2.7c1.5-1.1,1.6-1.2,2.7-0.1c0.8-0.1,1.4-0.2,2.2-0.4
							c0.3,2.5,0.7,5,1,7.5c0,0,0.1,0,0.1-0.1c0.1-0.1,0.1-0.2,0.1-0.4l0,0c1,0.6-0.1,1.2,0,1.7c1.3,0,2.5,0,3.9,0
							c-1.9-2.1-2.3-5.4-1.1-7.5c1.1,1.9,2.1,3.8,3.2,5.7c0.3-0.1,0.5-0.2,0.7-0.3c0.6,1.8,1.5,2.2,2.9,1.3c-0.6-1-1.2-2.1-1.9-3.1
							c-1.6-2.3-1.6-4.8-0.5-7.2c0.7-1.6,1-3.2,1.2-4.8c0.4-3.3,1.4-4.3,4.7-4.3c2.1,0,4-0.4,5.7-1.8c1.1-0.9,1.2-1.6,0-2.3
							c-1.1-0.7-1.7-1.5-1.8-2.8c-0.1-2-1-3.7-2.6-4.7c-1.8-1-3-2.4-4-4c-0.5-0.8-1.3-1.4-2.3-1.2c-1.1,0.3-1.8,1-2.1,2.1
							c-0.2,0.7-0.1,1.5-0.2,2.1c-0.8-0.1-1.7-0.3-2.6-0.3c-1.2-0.1-2.3,0.2-2.8,1.4c-0.5,1.1,0.1,2.1,0.8,2.9c0.5,0.6,1.1,1.1,1.8,1.7
							c-0.9,1.3-1.9,2.7-2.8,3.9c-3-1.1-4.1-1.3-5.7-1.1c-4.5,0.3-7.9,2.4-10.4,6c-1,1.4-2.1,2.6-3.7,3.2c-0.2,0.1-0.3,0.3-0.7,0.5
							c0.7,0,1.2,0,1.8,0c-0.4,0.5-0.7,0.8-1,1.1c-0.3,0.3-0.6,0.6-0.9,0.9c0,0.1,0.1,0.2,0.1,0.3c0.6-0.1,1.1-0.1,1.7-0.2
							c-0.3,0.5-0.5,0.8-0.7,1.2c0,0.1,0.1,0.1,0.1,0.2c0.4-0.2,0.9-0.4,1.4-0.7c0,0.6,0,1.2,0,2c0.4-0.5,0.6-0.8,0.8-1.1
							C6,28,6.2,29,4.7,31.1c-1,1.4-1.2,3.1-1.1,4.7c0,0.3,0.4,0.6,0.6,0.8c0.3,0,0.5,0,0.8,0.1c0.5,0.7,0.5,1.9,1.7,2c1,0,1.9,0,2.9,0
							c0.1-0.1,0.1-0.1,0.2-0.2C8,37,7.4,35.2,8.6,33c0.2,0.3,0.4,0.4,0.6,0.6l0,0c0.7,2.8,2.6,4.1,5.2,3.6C13.5,35.6,12.6,34,11.6,32.3z"
							/>
						</svg>
					</div>
					<?php 
						wp_nav_menu( array( 
							'theme_location'	=> 'primary', 
							'menu_id'			=> 'primary-menu',
							'container'			=> '',
							'items_wrap'		=> '<ul id="%1$s" class="hidden %2$s">%3$s</ul>',
						)); 
					?>
				</nav>
			</div>

		</div><!-- #masthead -->

	</header>

	<section id="content" class="site-content">
