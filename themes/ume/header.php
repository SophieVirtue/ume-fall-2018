<?php
/**
 * The header for our theme.
 *
 * @package UME
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

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				
				</div><!-- .site-branding -->
			<div class="main-header">
			  <div class="left-column">
			      <div class="logo">
				  <img src="<?php echo get_template_directory_uri();?>/images/Lightning R.png" alt="lightning-right"/>
                  </div>
                  <div class="label">
				  <h3 class="site-title"> UME Arcade </h3>
                   </div>

			
              </div>
			  <div class="right-column">
			    <div class="search-form">
                    <?php get_search_form(); ?>
			    </div>
			     <div class="hamburger-icon">
			      <div class="hamburger-bar"></div>
                  <div class="hamburger-bar"></div>
                  <div class="hamburger-bar"></div>
				 </div>
				</div>
             </div>


				<nav id="site-navigation" class="main-navigation" role="navigation">
					
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
