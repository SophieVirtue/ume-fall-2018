<?php
/**
 * Template part for displaying posts.
 *
 * @package UME
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	</header><!-- .entry-header -->


       <div class="work-section">  
	      	<div class="work-image">
              <img class="work-flow-image" src="<?php echo CFS()->get ( 'work_flow_image' )?>">
			  </div>
          <div class="work-text">
		         <?php echo CFS()->get ( 'work_flow_text' );?>
			   </div>
</div>

   <div class="character-section">
             <div class="character-image">
			 <img class="character-image" src="<?php echo CFS()->get ( 'character_image' )?>">
			 </div>
			 <div class="character-text">
	      	<?php echo CFS()->get ( 'character_text' );?>
			  </div>
</div>

   <div class="obstacles-section">
          <div class="obstacles-image">
          <img class="obstacles-image" src="<?php echo CFS()->get ( 'obstacles_image' )?>">
          </div>
        <div class="obstacles-text">
		<?php echo CFS()->get ( 'obstacles_text' );?>
		</div>	
   </div>

       <div class="important-section">
	     
		 <div class="important-image">
	    <img class="important-image" src="<?php echo CFS()->get ( 'important_image' )?>">
		</div>

         <div class="important-text">
		<?php echo CFS()->get ( 'important_text' );?>
		</div>

        

		</div>



		

	<!-- .entry-content -->
</article><!-- #post-## -->
