

<h3>
     <a href="<?php echo esc_url( get_the_permalink()); ?>" class="play-title-featured play">
          <?php echo get_the_title(); ?>
     </a>
</h3>
<a href="<?php echo esc_url( get_the_permalink()); ?>" class="play-thumbnail-featured play">
     <?php the_post_thumbnail( 'thumbnail');?>
</a>
<div class="author">
     <h4> By: <span class="author-transform"><?php echo CFS()->get ( 'game_author' ); ?> </span></h4>
</div><!-- end of author -->
<div class="play-button-featured">
	<?php printf( '<a href="%s" class="play-button-img play"><img src="'.get_template_directory_uri().'/assets/images/play-button.png" alt="Play"/></a>', esc_url( get_permalink() ) ); ?>
</div><!-- end of play-button-featured -->