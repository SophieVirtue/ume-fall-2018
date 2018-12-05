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
			<img class="leader-title" src="<?php echo get_template_directory_uri() . '/assets/images/pink-neon-words/leaderboard.png' ?>" alt="">
            <?php
        //TODO get_posts of Journal Posts
        /*
        *Get the blog Journal Entries
        **/      
   $args = array( 'post_type' => 'game', 'posts_per_page' => '10');
   $game_posts = get_posts( $args ); // returns an array of posts
   

?>
<?php foreach ( $game_posts as $post ) : setup_postdata( $post ); ?>
           
            <h3>
                <a href="<?php echo get_the_permalink(); ?>">
                <?php the_title(); ?> </a>
            </h3>
            <?php the_post_thumbnail( 'thumbnail' ); ?>
            <div class="author">
	            <h4> By: <?php echo CFS()->get ( 'game_author' ); ?> </h4>
            </div>
            <div class="coins">
	            <h4> Coins: <?php echo CFS()->get ( 'game_coins' ); ?> </h4>
            </div>
<?php endforeach; // End of the loop. ?>
        </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
