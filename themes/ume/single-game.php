<?php
/**
 * The template for displaying all single games.
 *
 * @package UME
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    
        <div class="neon-play-game">	
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pink-neon-words/play.png" />
		</div>
    
    </header><!-- .entry-header -->

	<div class="entry-content">
        
     <iframe class="UnityFrame" scrolling="no" src="<?php $link = CFS()->get('game_play'); echo $link['url']?>" kwframeid="1" style="top: -4px; left: -4px; width: 960px; height: 480px;"></iframe>

	</div><!-- .entry-content -->

	
</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>




