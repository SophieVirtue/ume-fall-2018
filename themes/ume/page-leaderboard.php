<?php
/**
 * The template for displaying the leaderboard.
 *
 * @package UME
 */

get_header(); 
get_sidebar();?>

<div id="primary" class="content-area">
	<main id="main" class="site-main board-page" role="main">
        <div class="leaderboard">
            <div class="leaderboard-title">
                <img class="leaderboard-logo" src="<?php echo get_template_directory_uri() . '/assets/images/pink-neon-words/leaderboard.png' ?>" alt="leaderboard">
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
                                </div> <!-- end of leader-ranking -->
                                <div class="leader-thumbnail">   
                                    <a href="<?php echo esc_url( get_the_permalink()); ?>" class="play">
                                        <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-responsive' ) ); ?>
                                    </a>
                                </div><!-- end of leader thumbnail -->
                                <div class="leader-content">
                                    <div class="leader-info">
                                        <div class="leader-title">
                                            <h3>
                                                <a href="<?php echo get_the_permalink(); ?>" class="play">
                                                    <?php the_title(); ?> 
                                                </a>
                                            </h3>
                                        </div><!-- end of leader-title -->
                                        <div class="leader-name">
	                                        <h4> By <?php echo CFS()->get ( 'game_author' ); ?> </h4>
                                        </div><!-- end of leader-name -->
                                        <div class="leader-coins">
	                                        <h4> 
                                                <img class="coin" src="<?php echo get_template_directory_uri();?>/assets/images/coin.png" alt="coin"/><?php echo CFS()->get ( 'game_coins' ); ?> 
                                            </h4>
                                        </div><!-- end of leader-coins -->
                                    </div> <!-- end of leader-info -->
                                    <div class="leader-icon">
                                    </div><!-- end of leader-icon -->
                                </div><!-- end of leader-content -->
                            </div> <!-- top-player -->
                            <?php endforeach; // End of the game loop. ?>
                        </div><!-- end of top-players -->
                    </section><!-- end of top-three -->
            </div><!-- end of leaderboard-title -->
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
                        </div><!-- end of leader-ranking -->
                        <div class="leader-content">
                            <div class="leader-info">
                                <div class="leader-title">
                                    <h3>
                                        <a href="<?php echo get_the_permalink(); ?>" class="play">
                                            <?php the_title(); ?> 
                                        </a>
                                    </h3>
                                </div><!-- end of leader-title -->
                                <div class="leader-name">
	                                <h4 class="leader-name-top-7"> By: <?php echo CFS()->get ( 'game_author' ); ?> </h4>
                                </div><!-- end of leader-name -->
                                <div class="leader-coins">
                                    <h4 class="leader-prizes">  
                                        <?php echo ume_get_prizes( CFS()->get ( 'game_coins' )).'/12 prizes achieved'; ?> 
                                    </h4>
                                    <div class="prize-bar">
                                        <div class="inner-bar"
                                            style="width: <?php echo ume_get_prizes( CFS()->get ( 'game_coins' ))*90*0.0833 ?>px">
                                        </div><!-- end of inner bar -->
                                        <div class="inner-bar-tablet"
                                            style="width: <?php echo ume_get_prizes( CFS()->get ( 'game_coins' ))*205*0.0833 ?>px">
                                        </div><!-- end of inner-bar-tablet -->
                                        <div class="inner-bar-desktop"
                                            style="width: <?php echo ume_get_prizes( CFS()->get ( 'game_coins' ))*290*0.0833 ?>px">
                                        </div><!-- end of inner-bar-desktop -->
                                    </div><!-- end of prize-bar -->
                                    <h4 class="coin-amount-top-7"> <img class="coin" src="<?php echo get_template_directory_uri();?>/assets/images/coin.png" alt="coin"/><?php echo CFS()->get ( 'game_coins' ); ?> </h4>
                                </div><!-- end of leader-coins -->
                            </div><!-- end of leader-info -->      
                            <div class="leader-icon">
                                <div class="leader-thumbnail">  
                                    <a href="<?php echo esc_url( get_the_permalink()); ?>" class="play"> 
                                        <?php the_post_thumbnail( 'thumbnail' ); ?>
                                    </a>
                                </div><!-- end of leader-thumbnail -->
                            </div><!-- end of leader-icon -->
                        </div><!-- end of leader-content -->
                    </div> <!-- end of leader-ranking -->
                    <?php endforeach; // End of the game loop. ?>
                </section><!-- end of top-seven -->
            </div><!-- end of remaining players -->
        </div><!-- end of leader-board -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
