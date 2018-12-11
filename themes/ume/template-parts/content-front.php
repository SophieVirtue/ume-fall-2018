 <h3>  
 <?php the_title( printf( '<a href="%s" rel="bookmark" class="play">', esc_url( get_permalink() ) ) ); ?> </a>
   </h3>
            <?php the_post_thumbnail( 'thumbnail', printf( '<a href="%s" rel="bookmark" class="play">', esc_url( get_permalink() ) )); ?></a>
    <div class="author">
	<h4> By: <?php echo CFS()->get ( 'game_author' ); ?> </h4>
    </div>
    <button class="arrow">
            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-pointing-down.jpg"/>
    </button>
    