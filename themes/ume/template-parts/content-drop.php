<article class="game-dropdown">
            
   <div class="title">    
   <h3>
   
   <?php the_title(); ?> 

   </h3>
   </div>

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

    <div class="thumbnail">
            <?php the_post_thumbnail( 'thumbnail' ); ?>
            </div>

</article>