<?php
/**
 * The template for displaying the leaderboard.
 *
 * @package UME
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <div class="leaderboard">
            <div class="leader-title">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/pink-neon-words/leaderboard.png' ?>" alt="">
            </div>

            <?php
   $args = array( 'post_type' => 'game', 'posts_per_page' => '10', 'meta_key' => 'game_coins', 'orderby' => 'meta_value_num');
   $game_posts = get_posts( $args ); // returns an array of posts

?>

    <section class="top-ten">
        <?php 
        $i = 1;
        foreach ( $game_posts as $post ) : setup_postdata( $post ); 

        ?>
            <div class="numbers">
                <p><?php  echo $i++; ?></p>
            </div>
            
           <div class="leader">
               <div class="leader-info">
            <h3>
                <a href="<?php echo get_the_permalink(); ?>">
                <?php the_title(); ?> </a>
            </h3>
            <div class="author">
	            <h4> By: <?php echo CFS()->get ( 'game_author' ); ?> </h4>
            </div>
            <div class="coins">
	            <h4> Coins: <?php echo CFS()->get ( 'game_coins' ); ?> </h4>
            </div>
        </div>
            <?php the_post_thumbnail( 'thumbnail' ); ?>
            </div> <!-- end of leadernumber -->
        <?php endforeach; // End of the game loop. ?>
    </section>
        </div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
