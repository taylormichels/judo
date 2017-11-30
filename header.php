<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Judo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'judo' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<!--<div class="container"><img style='width:200px' src='<?php echo get_template_directory_uri() . '/pj-logo2_03_black_03.png'; ?>'class="img-responsive"/></div> 
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div>--><!-- .site-branding -->
		<div id="socialhead" style="background-color: #333;height: 30px;text-align: right; cursor:pointer">
			<img src="https://rohitink.com/wp-content/uploads/2013/09/sociocons-1024x748.png" style="
			    height: 70px;			
			    overflow: hidden;			    
			    top: 6px;
			    right: 20px;
			    position: relative;">
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'judo' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?> -->
			<?php /* Primary navigation */
				wp_nav_menu( array(
				  'menu' => 'top_menu',
				  'depth' => 2,
				  'container' => false,
				  'menu_class' => 'nav',
				  //Process nav menu using our custom nav walker
				  'walker' => new wp_bootstrap_navwalker())
				);
			?>
		</nav><!-- #site-navigation -->
		<!-- <img class="img-responsive" style="width:100%" src="<?php echo( get_header_image() ); ?>" 
			alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />	 -->		
	</header><!-- #masthead -->
	<div id="content" class="site-content">