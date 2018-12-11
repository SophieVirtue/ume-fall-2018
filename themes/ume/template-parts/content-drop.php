<article class="game-dropdown">
            
   <div class="title">    
   <h3>
   
   <?php the_title( printf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) )); ?> </a>

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

    <button class="download">
       <a href="./download">Download</a>
    </button>
    <button class="play">
        <?php printf( '<a href="%s" rel="bookmark">Play</a>', esc_url( get_permalink() ) ); ?>
    </button>
    <button class="share">
        Share
    </button>

    <div class="thumbnail">
        <?php the_post_thumbnail( 'thumbnail', printf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) )); ?></a>
    </div>
    
    <div class="gems">
        <h4>Prizes Earned <?php $gems =  ume_get_icons ( CFS()->get ( 'game_coins' ))?>
            <?php foreach($gems as $gem): 
                echo $gem;
            endforeach; ?> </h4>
</div>

</article>