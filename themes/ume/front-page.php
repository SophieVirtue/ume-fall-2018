<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <div class="hide-div">
        <div class="popup">
            <p>Please play our games on a desktop or laptop!</p>
        </div>
    </div>
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
   $args = array( 'post_type' => 'game', 'posts_per_page' => '4', 'category_name' => 'Agriculture' );
   $game_posts = get_posts( $args ); // returns an array of posts
?>
        <section class="agriculture-game">
        <div class="agriculture-games">
<?php foreach ( $game_posts as $post ) : setup_postdata( $post ); ?>
<div class="agriculture-game">
<?php get_template_part( 'template-parts/content-front' ); ?>

 <div class="drop-down">
           <?php get_template_part( 'template-parts/content-drop' ); ?>

      </div>
</div>
   
<?php endforeach; wp_reset_postdata(); 
        ?>

          </div>
          </section>

          <hr>

          <?php    
   $args = array( 'post_type' => 'game', 'posts_per_page' => '4', 'category_name' => 'Life Sciences' );
   $game_posts = get_posts( $args ); // returns an array of posts
?>
        <section class="science-game">
        <div class="science-games">
<?php foreach ( $game_posts as $post ) : setup_postdata( $post ); ?>
<div class="science-game">

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
          <hr>
          <?php
            
   $args = array( 'post_type' => 'game', 'posts_per_page' => '4', 'category_name' => 'Digital Fashion' );
   $game_posts = get_posts( $args ); // returns an array of posts
?>
        <section class="fashion-game">
        <div class="fashion-games">
<?php foreach ( $game_posts as $post ) : setup_postdata( $post ); ?>

 

<div class="fashion-game">

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

          <hr>

 <?php
         
   $args = array( 'post_type' => 'game', 'posts_per_page' => '4', 'category_name' => 'My Cutest Pet' );
   $game_posts = get_posts( $args ); // returns an array of posts
?>
        <section class="pet-game">
        <div class="pet-games">
<?php foreach ( $game_posts as $post ) : setup_postdata( $post ); ?>

<div class="pet-game">

<?php get_template_part( 'template-parts/content-front' ); ?>

 <div class="drop-down">
           <?php get_template_part( 'template-parts/content-drop' ); ?>

      </div>   
</div>

   
<?php endforeach; wp_reset_postdata(); 
        ?>

          </div>
          </section>
<hr>
<?php
              
   $args = array( 'post_type' => 'game', 'posts_per_page' => '4', 'category_name' => 'Space Odyssey' );
   $game_posts = get_posts( $args ); // returns an array of posts
?>
        <section class="space-game">
        <div class="space-games">
<?php foreach ( $game_posts as $post ) : setup_postdata( $post ); ?>
<div class="space-game">
           
<?php get_template_part( 'template-parts/content-front' ); ?>

 <div class="drop-down">
           <?php get_template_part( 'template-parts/content-drop' ); ?>
      </div>
</div>
<?php endforeach; wp_reset_postdata(); ?>
          </div>
          </section>
<hr>
<?php     
   $args = array( 'post_type' => 'game', 'posts_per_page' => '4', 'category_name' => 'Wild Pacific' );
   $game_posts = get_posts( $args ); 
?>
        <section class="sea-game">
        <div class="sea-games">
<?php foreach ( $game_posts as $post ) : setup_postdata( $post ); ?>
<div class="sea-game">
<?php get_template_part( 'template-parts/content-front' ); ?>
     <div class="drop-down">
           <?php get_template_part( 'template-parts/content-drop' ); ?>
      </div>
</div>
<?php endforeach; wp_reset_postdata();?>
        </div>
          </section>
            </div>
</section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
