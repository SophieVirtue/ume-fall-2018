<?php
/**
 * The template for displaying all single games.
 *
 * @package UME
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-id="<?php the_ID() ?>">
	<header class="entry-header">
    
        <div class="neon-play-game">	
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pink-neon-words/play.png" />
		</div>
    
	</header><!-- .entry-header -->
	<!-- $link; echo link['url']; -->
	<?php 
	
	$link = CFS()->get('play_game');

	if(($link['url'] == '')):
		?>
		<p class="no-game-found">
			Sorry, no game was found,  <a class="no-game-home-return" href= <?php echo get_home_url()?>>please click here to return to front page</a>.
		</p>
	<?php else :
	?>
		<p class="loading-message">We appreciate your patience as the game loads!</p>
	<?php endif;
?>
	
		<div class="entry-content game-wrapper">
	 		
     		<iframe class="UnityFrame" scrolling="no" src="<?php echo $link['url']?>" kwframeid="1"></iframe>
		</div><!-- .entry-content -->


	
</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>




