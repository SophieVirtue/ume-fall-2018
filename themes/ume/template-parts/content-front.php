 <h3>  

 <a href="<?php echo esc_url( get_the_permalink()); ?>" class="play">
 <?php echo get_the_title(); ?>
 </a>
   </h3>
   <a href="<?php echo esc_url( get_the_permalink()); ?>" class="play">
        <?php the_post_thumbnail( 'thumbnail');?>
   </a>
    <div class="author">
	<h4> By: <?php echo CFS()->get ( 'game_author' ); ?> </h4>
    </div>
    <div class="arrow">
            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow.png"/>
<<<<<<< HEAD
</div>
=======
</div>
    
>>>>>>> 559d4ee8d1a583d3faeb3ecf336fa28c2013521e
