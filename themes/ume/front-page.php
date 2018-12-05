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
            
            </div>
    </section>



<section>
            <div class="game-background">
        <?php
        //TODO get_posts of Journal Posts
        /*
        *Get the blog Journal Entries
        **/      
   $args = array( 'post_type' => 'game', 'posts_per_page' => '4', 'category_name' => 'Agriculture' );
   $game_posts = get_posts( $args ); // returns an array of posts
?>
        <section class="agriculture-game">
        <div class="agriculture-games">
<?php foreach ( $game_posts as $post ) : setup_postdata( $post ); ?>
<article class="game-entry">
<div class="agriculture-game">
            <?php the_post_thumbnail( 'thumbnail' ); ?>
            
   <h3>
   <a href="<?php echo get_the_permalink(); ?>">
   
   <?php the_title(); ?> </a>

   </h3>

    <div class="author">
	<h4> By: <?php echo CFS()->get ( 'game_author' ); ?> </h4>
    </div>
    <div class="location">
	<h4> <?php echo CFS()->get ( 'game_location' ); ?> </h4>
    </div>
    <div class="program">
	<h4> <?php echo CFS()->get ( 'game_program' ); ?> </h4>
    </div>
    <div class="coins">
	<h4> Coins: <?php echo CFS()->get ( 'game_coins' ); ?> </h4>
    </div>
   
   
   <a class="read-more" href="<?php echo get_the_permalink(); ?>">
   <button>
   
   
   Read Entry 

   </button>
   </a>
</div>
</article>
   <?php /* Content from your array of post results goes here */ ?>
<?php endforeach; wp_reset_postdata(); 
        ?>

          </div>
          </section>

          <hr>

          <?php
        //TODO get_posts of Journal Posts
        /*
        *Get the blog Journal Entries
        **/      
   $args = array( 'post_type' => 'game', 'posts_per_page' => '4', 'category_name' => 'Life Sciences' );
   $game_posts = get_posts( $args ); // returns an array of posts
?>
        <section class="science-game">
        <div class="science-games">
<?php foreach ( $game_posts as $post ) : setup_postdata( $post ); ?>
<article class="game-entry">
<div class="science-game">
            <?php the_post_thumbnail( 'thumbnail' ); ?>
            
   <h3>
   <a href="<?php echo get_the_permalink(); ?>">
   
   <?php the_title(); ?> </a>

   </h3>

    <div class="author">
	<h4> By: <?php echo CFS()->get ( 'game_author' ); ?> </h4>
    </div>
    <div class="location">
	<h4> <?php echo CFS()->get ( 'game_location' ); ?> </h4>
    </div>
    <div class="program">
	<h4> <?php echo CFS()->get ( 'game_program' ); ?> </h4>
    </div>
    <div class="coins">
	<h4> Coins: <?php echo CFS()->get ( 'game_coins' ); ?> </h4>
    </div>
   
   
   <a class="read-more" href="<?php echo get_the_permalink(); ?>">
   <button>
   
   
   Read Entry 

   </button>
   </a>
</div>
</article>
   <?php /* Content from your array of post results goes here */ ?>
<?php endforeach; wp_reset_postdata(); 
        ?>

          </div>
          </section>
          <hr>
          <?php
        //TODO get_posts of Journal Posts
        /*
        *Get the blog Journal Entries
        **/      
   $args = array( 'post_type' => 'game', 'posts_per_page' => '4', 'category_name' => 'Digital Fashion' );
   $game_posts = get_posts( $args ); // returns an array of posts
?>
        <section class="fashion-game">
        <div class="fashion-games">
<?php foreach ( $game_posts as $post ) : setup_postdata( $post ); ?>
<article class="game-entry">
<div class="fashion-game">
            <?php the_post_thumbnail( 'thumbnail' ); ?>
            
   <h3>
   <a href="<?php echo get_the_permalink(); ?>">
   
   <?php the_title(); ?> </a>

   </h3>

    <div class="author">
	<h4> By: <?php echo CFS()->get ( 'game_author' ); ?> </h4>
    </div>
    <div class="location">
	<h4> <?php echo CFS()->get ( 'game_location' ); ?> </h4>
    </div>
    <div class="program">
	<h4> <?php echo CFS()->get ( 'game_program' ); ?> </h4>
    </div>
    <div class="coins">
	<h4> Coins: <?php echo CFS()->get ( 'game_coins' ); ?> </h4>
    </div>
   
   
   <a class="read-more" href="<?php echo get_the_permalink(); ?>">
   <button>
   
   
   Read Entry 

   </button>
   </a>
</div>
</article>
   <?php /* Content from your array of post results goes here */ ?>
<?php endforeach; wp_reset_postdata(); 
        ?>

          </div>
          </section>

          <hr>

 <?php
        //TODO get_posts of Journal Posts
        /*
        *Get the blog Journal Entries
        **/      
   $args = array( 'post_type' => 'game', 'posts_per_page' => '4', 'category_name' => 'My Cutest Pet' );
   $game_posts = get_posts( $args ); // returns an array of posts
?>
        <section class="pet-game">
        <div class="pet-games">
<?php foreach ( $game_posts as $post ) : setup_postdata( $post ); ?>
<article class="game-entry">
<div class="pet-game">
            <?php the_post_thumbnail( 'thumbnail' ); ?>
            
   <h3>
   <a href="<?php echo get_the_permalink(); ?>">
   
   <?php the_title(); ?> </a>

   </h3>

    <div class="author">
	<h4> By: <?php echo CFS()->get ( 'game_author' ); ?> </h4>
    </div>
    <div class="location">
	<h4> <?php echo CFS()->get ( 'game_location' ); ?> </h4>
    </div>
    <div class="program">
	<h4> <?php echo CFS()->get ( 'game_program' ); ?> </h4>
    </div>
    <div class="coins">
	<h4> Coins: <?php echo CFS()->get ( 'game_coins' ); ?> </h4>
    </div>
   
   
   <a class="read-more" href="<?php echo get_the_permalink(); ?>">
   <button>
   
   
   Read Entry 

   </button>
   </a>
</div>
</article>
   <?php /* Content from your array of post results goes here */ ?>
<?php endforeach; wp_reset_postdata(); 
        ?>

          </div>
          </section>
<hr>
<?php
        //TODO get_posts of Journal Posts
        /*
        *Get the blog Journal Entries
        **/      
   $args = array( 'post_type' => 'game', 'posts_per_page' => '4', 'category_name' => 'Space Odyssey' );
   $game_posts = get_posts( $args ); // returns an array of posts
?>
        <section class="space-game">
        <div class="space-games">
<?php foreach ( $game_posts as $post ) : setup_postdata( $post ); ?>
<article class="game-entry">
<div class="space-game">
            <?php the_post_thumbnail( 'thumbnail' ); ?>
            
   <h3>
   <a href="<?php echo get_the_permalink(); ?>">
   
   <?php the_title(); ?> </a>

   </h3>

    <div class="author">
	<h4> By: <?php echo CFS()->get ( 'game_author' ); ?> </h4>
    </div>
    <div class="location">
	<h4> <?php echo CFS()->get ( 'game_location' ); ?> </h4>
    </div>
    <div class="program">
	<h4> <?php echo CFS()->get ( 'game_program' ); ?> </h4>
    </div>
    <div class="coins">
	<h4> Coins: <?php echo CFS()->get ( 'game_coins' ); ?> </h4>
    </div>
   
   
   <a class="read-more" href="<?php echo get_the_permalink(); ?>">
   <button>
   
   
   Read Entry 

   </button>
   </a>
</div>
</article>
   <?php /* Content from your array of post results goes here */ ?>
<?php endforeach; wp_reset_postdata(); 
        ?>

          </div>
          </section>
<hr>
<?php
        //TODO get_posts of Journal Posts
        /*
        *Get the blog Journal Entries
        **/      
   $args = array( 'post_type' => 'game', 'posts_per_page' => '4', 'category_name' => 'Wild Pacific' );
   $game_posts = get_posts( $args ); // returns an array of posts
?>
        <section class="sea-game">
        <div class="sea-games">
<?php foreach ( $game_posts as $post ) : setup_postdata( $post ); ?>
<article class="game-entry">
<div class="sea-game">
            <?php the_post_thumbnail( 'thumbnail' ); ?>
            
   <h3>
   <a href="<?php echo get_the_permalink(); ?>">
   
   <?php the_title(); ?> </a>

   </h3>

    <div class="author">
	<h4> By: <?php echo CFS()->get ( 'game_author' ); ?> </h4>
    </div>
    <div class="location">
	<h4> <?php echo CFS()->get ( 'game_location' ); ?> </h4>
    </div>
    <div class="program">
	<h4> <?php echo CFS()->get ( 'game_program' ); ?> </h4>
    </div>
    <div class="coins">
	<h4> Coins: <?php echo CFS()->get ( 'game_coins' ); ?> </h4>
    </div>
   
   
   <a class="read-more" href="<?php echo get_the_permalink(); ?>">
   <button>
   
   
   Read Entry 

   </button>
   </a>
</div>
</article>
   <?php /* Content from your array of post results goes here */ ?>
<?php endforeach; wp_reset_postdata(); 
        ?>

          </div>
          </section>

            </div>

</section>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
