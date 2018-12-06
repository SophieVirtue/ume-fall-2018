<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <!-- <div class="hide-div">
        <div class="popup">
            <p>Please play our games on a desktop or laptop!</p>
        </div>
    </div> -->
        <section>
        <div class="banner">
              <div class="upper-row">
                  <div class="left-lightning">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-left.png"/>
                  </div>
                   <div class="center-label">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ume-academy-words.png"/>
                   </div>
                 <div class="right-lightning">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lightning-right.png"/>
                   </div>  
               </div>
               <div class="lower-row">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pink-neon-words/arcade.png"/>

               </div>


         </div>
    </section>
<section>
   <div class="game-background">
      <div class="featured-game">

       <?php      
   $args = array( 'post_type' => 'game', 'posts_per_page' => '3');
   $game_posts = get_posts( $args ); // returns an array of posts
?>
        <section class="featured-game">
        <div class="featured-games">
<?php foreach ( $game_posts as $post ) : setup_postdata( $post ); ?>
<div class="featured-game">
<?php get_template_part( 'template-parts/content-front' ); ?>

<div class="drop-down">
           <?php get_template_part( 'template-parts/content-drop' ); ?>

      </div>


</div>
   <?php /* Content from your array of post results goes here */ ?>
<?php endforeach; wp_reset_postdata(); 
        ?>

          </div>
          </section>
      </div>
        <hr>
        <?php   
   $game_categories = get_terms( array(
           'taxonomy' => 'game_category',
           'hide_empty' => true,
   ) );
        foreach( $game_categories as $category ): 

   $args = array( 'post_type' => 'game', 'posts_per_page' => '4', 'category_name' => $category->name );
   $game_posts = get_posts( $args ); // returns an array of posts
?>
        <section class="<?php $category->slug ?>-category">
        <h2><?php echo $category->name ?></h2>
        <div class="<?php $category->slug ?>-games main-carousel">
<?php foreach ( $game_posts as $post ) : setup_postdata( $post ); ?>
<div class="<?php $category->slug ?>-game carousel-cell" data-id="<?php the_ID(); ?>">
<?php 
get_template_part( 'template-parts/content-front' );?>
</div>
   
<?php endforeach; wp_reset_postdata(); 
        ?>

          </div>
          <?php foreach ( $game_posts as $post ) : setup_postdata( $post ); ?>
          <div class="drop-down" data-id="<?php the_ID(); ?>">
           <?php get_template_part( 'template-parts/content-drop' ); ?>
      </div>
<?php endforeach; wp_reset_postdata(); ?>
          </section>

          <hr>
        <?php endforeach; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
