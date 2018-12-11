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
		<div id="page" class="hfeed site footer-relative">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>
			
			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->
				<div class="main-header">
			  		<div class="left-column">
				  		<img class="lightning" src="<?php echo get_template_directory_uri();?>/assets/images/lightning-right.png" alt="lightning-right"/>
				  		<a href="<?php echo get_home_url(); ?>">
							<h3 class="site-title"> UME Arcade </h3>
                   		</a>
              		</div>
			  		<div class="right-column">
			    		<div class="search-form">
                    		<?php get_search_form(); ?>
			    		</div>
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<div class="mobile-hidden-nav">
								<a class="leader-nav" href="./leaderboard"><h3 class="main-nav">Leaderboard</h3></a>
								<a href="./prizes"><h3 class="main-nav">Prizes</h3></a>	
							</div>
							<span class="open-slide">
								<a href="#" onclick="openSlideMenu()"><i class="fas fa-bars"></i></a>
							</span>
						</nav>
						<div id="side-menu" class="side-nav">
							<a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
							<a href="./prizes">Prizes</a>
							<a href="./leaderboard">Leaderboard</a>
							<a href="<?php echo get_home_url(); ?>">UME Academy</a>
						</div>
			 		</div>
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
