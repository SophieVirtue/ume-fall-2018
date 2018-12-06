<article class="game-entry">
 <h3>  
   <?php the_title(); ?> 
   </h3>
            <?php the_post_thumbnail( 'thumbnail' ); ?>
    <div class="author">
	<h4> By: <?php echo CFS()->get ( 'game_author' ); ?> </h4>
    </div>
    <div class="arrow-pointer">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-pointing-down.jpg"/>
    </div>

</article>