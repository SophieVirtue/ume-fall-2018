<?php
/**
 * The template for displaying the leaderboard.
 *
 * @package UME
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main board-page" role="main">
     <div class="leaderboard">
            <div class="leaderboard-title">
                <img class="leaderboard-logo" src="<?php echo get_template_directory_uri() . '/assets/images/pink-neon-words/leaderboard.png' ?>" alt="">
                <section class="top-three">
             <div class="top-players">
      <?php
             $args = array( 'post_type' => 'game', 'posts_per_page' => '3', 'meta_key' => 'game_coins', 'orderby' => 'meta_value_num');
             $game_posts = get_posts( $args ); // returns an array of posts
        ?>
             <?php 
              $i = 1;
            foreach ( $game_posts as $post ) : setup_postdata( $post ); 
             ?>
         <div class="top-player">
            <div class="leader-ranking">
                <p><?php  echo $i++; ?></p>
</div>      
            <div class="leader-content">
           <div class="leader-info">
                <div class="leader-title">
            <h3>
                <a href="<?php echo get_the_permalink(); ?>">
                <?php the_title(); ?> </a>
            </h3>
               </div>
               <div class="leader-name">
	            <h4> By: <?php echo CFS()->get ( 'game_author' ); ?> </h4>
               </div>
              <div class="leader-coins">
	            <h4> Coins: <?php echo CFS()->get ( 'game_coins' ); ?> </h4>
              </div>
           </div>      
          <div class="leader-icon">
          <div class="leader-thumbnail">   
            <?php the_post_thumbnail( 'thumbnail' ); ?>
         </div>
</div>
         </div>
         </div> <!-- end of leadernumber -->
        <?php endforeach; // End of the game loop. ?>
    </div>    
    </section>
    </div>
      <div class="remaining-players">
       <section class="top-seven">
        <?php
             $args = array( 'post_type' => 'game', 'posts_per_page' => '7', 'offset' => '3', 'meta_key' => 'game_coins', 'orderby' => 'meta_value_num');
             $game_posts = get_posts( $args ); // returns an array of posts
        ?>

             <?php 
              $i = 4;
            foreach ( $game_posts as $post ) : setup_postdata( $post ); 
             ?>

         <div class="remaining-player">

            <div class="leader-ranking">
                <p><?php  echo $i++; ?></p>
            </div>

         <div class="leader-content">
           <div class="leader-info">
                <div class="leader-title">
            <h3>
                <a href="<?php echo get_the_permalink(); ?>">
                <?php the_title(); ?> </a>
            </h3>
               </div>
               <div class="leader-name">
	            <h4> By: <?php echo CFS()->get ( 'game_author' ); ?> </h4>
               </div>
              <div class="leader-coins">
	            <h4> Coins: <?php echo CFS()->get ( 'game_coins' ); ?> </h4>
              </div>
        </div>
        
          <div class="leader-icon">
          <div class="leader-thumbnail">   
            <?php the_post_thumbnail( 'thumbnail' ); ?>
         </div>
</div>
</div>
         </div> <!-- end of leadernumber -->
        <?php endforeach; // End of the game loop. ?>
    
    </section>
    </div>    



    </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
