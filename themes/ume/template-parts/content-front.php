 <h3>  
   <?php the_title(); ?> 
   </h3>
            <?php the_post_thumbnail( 'thumbnail' ); ?>
    <div class="author">
	<h4> By: <?php echo CFS()->get ( 'game_author' ); ?> </h4>
    </div>
    <button class="arrow">
        <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-pointing-down.jpg"/>
    </button>
    