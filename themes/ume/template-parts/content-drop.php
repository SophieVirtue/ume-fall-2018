<article class="game-dropdown"  data-id="<?php the_ID(); ?>">
            
   <div class="title">    
   <h3>
   
   <?php the_title( printf( '<a href="%s" rel="bookmark" class="play">', esc_url( get_permalink() ) )); ?> </a>

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
    <div class="design-button">
    <?php $game_design = CFS()->get ( 'game_design' ); ?>
    <?php if (is_array($game_design)) : ?>

    <button>
    <a href="<?php echo get_permalink($game_design[0]); ?>">
        View Design Process
        </a>
</button>
     
<?php endif; ?>

</div>
    <div class="coins">
	<h4> Coins: <?php echo CFS()->get ( 'game_coins' ); ?> </h4>
    </div>
    <div class="buttons">
        <p class="download"><a href="./download?id=<?php the_ID(); ?>">Download</a></p>
        <p class="play"><?php printf( '<a href="%s" rel="bookmark">Play</a>', esc_url( get_permalink() ) ); ?></p> 
        <p>Share</p> 

    </div>
    
    <div class="thumbnail">
        <?php the_post_thumbnail( 'thumbnail', printf( '<a href="%s" rel="bookmark" class="play">', esc_url( get_permalink() ) )); ?></a>
    </div>
    
    <div class="gems">
        <h4>Prizes Earned <?php $gems =  ume_get_icons ( CFS()->get ( 'game_coins' ))?>
            <?php foreach($gems as $gem): 
                echo $gem;
            endforeach; ?> </h4>
</div>

</article>