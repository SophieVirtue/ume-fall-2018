<?php
/**
 * The main template file.
 *
 * @package UME
 */

get_header(); 
get_sidebar(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        

        <section class="grid-banner-container">
            <div class="banner">
                <div class="upper-row">
                    <div class="left-lightning">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-left.png" alt="lightning-bolt"/>
                    </div>
                    <div class="center-label">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ume-academy-words.png" alt="UME Academy"/>
                    </div>
                    <div class="right-lightning">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-right.png" alt="lightning-bolt"/>
                    </div>  
                </div>
                <div class="lower-row">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pink-neon-words/arcade.png" alt="Arcade"/>
                </div>
                <div class="rainbow-game-container">
                    <div class="white-rainbow">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/scroll-wheel.png" alt="light arc"/>
                    </div>
                    
                    <!-- beginning of featured games  -->
                    <div class="game-background">
    
                    <?php      
                    $args = array( 'post_type' => 'game', 'posts_per_page' => '3');
                    $game_posts = get_posts( $args ); // returns an array of posts
                    ?>
                    <section class="featured-game-section">
                        <div class="featured-games">
                            <?php foreach ( $game_posts as $post ) : setup_postdata( $post ); ?>
                                <div class="featured-game">
                                    <?php get_template_part( 'template-parts/content-featured' ); ?>
                                </div><!-- end of featured games -->
                                <?php /* Content from your array of post results goes here */ ?>
                            <?php endforeach; wp_reset_postdata(); ?>
                        </div>
                    </section>
                    </div>
                </div>
        </section>

        <section class="main-section-container">


        <!-- end of featured games -->

        <!-- beginning of game categories -->
        <?php   
   $game_categories = get_terms( array(
           'taxonomy' => 'game_category',
           'hide_empty' => false
   ) );

    foreach( $game_categories as $category ): 

    $args = array( 
       'post_type' => 'game', 
       'posts_per_page' => -1, 
       'tax_query' => array(
           array(
                'taxonomy' => 'game_category',
                'field' => 'term_id',
                'terms' => $category->term_id
            )
        )
    );

   $game_posts = new WP_Query($args);
?>
        <div class="category-folder">
        <section class="<?php echo $category->slug ?> category">
        <h2><?php echo $category->name ?></h2>
            <div class="<?php echo $category->slug ?>-games main-carousel">
<?php while ( $game_posts->have_posts() ) : $game_posts->the_post(); ?>
                <div class="<?php $category->slug ?>-game carousel-cell" data-id="<?php the_ID(); ?>">
                  <div class="content"><?php 
        get_template_part( 'template-parts/content-front' );?>
                 </div><!-- end of category-content div -->
               </div>
        <?php endwhile; wp_reset_postdata(); 
        ?>
  
            </div>
    <?php while ( $game_posts->have_posts() ) : $game_posts->the_post(); ?>
          <div class="drop-down" data-id="<?php the_ID(); ?>">
           <?php get_template_part( 'template-parts/content-drop' ); ?>
          </div>
          <?php endwhile; wp_reset_postdata(); ?>
          </section>
        </div>
        

        <?php endforeach; ?>
        <!-- end of game categories -->
        </section>
        <!-- end of featured games section -->

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
