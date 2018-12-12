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

       <div class="work-folder design-folder">
	   <h3 class="work-title design-title">
	   <?php
        $props = CFS()->get_field_info( 'work_flow_text' );
		echo $props['label']; ?>
		</h3>
       <div class="work-section design-section">  
	      	<div class="work-image design-image">
              <img class="work-flow-image" src="<?php echo CFS()->get ( 'work_flow_image' )?>">
			  </div>
          <div class="work-text design-text">
		         <?php echo CFS()->get ( 'work_flow_text' );?>
			   </div>
               </div>
			   </div>

   <div class="character-folder design-folder">
   <h3 class="character-title design-title">
	   <?php
        $props = CFS()->get_field_info( 'character_text' );
		echo $props['label']; ?>
		</h3>
		     <div class="character-section design-section">
             <div class="character-image design-image">
			 <img class="character-image" src="<?php echo CFS()->get ( 'character_image' )?>">
			 </div>
			 <div class="character-text design-text">
	      	<?php echo CFS()->get ( 'character_text' );?>
			  </div>
</div>
</div>

   
   <div class="obstacles-folder design-folder">
   <h3 class="obstacles-title design-title">
	   <?php
        $props = CFS()->get_field_info( 'obstacles_text' );
		echo $props['label']; ?>
		</h3>
		<div class="obstacles-section design-section">
          <div class="obstacles-image design-image">
          <img class="obstacles-image" src="<?php echo CFS()->get ( 'obstacles_image' )?>">
          </div>
        <div class="obstacles-text design-text">
		<?php echo CFS()->get ( 'obstacles_text' );?>
		</div>	
</div>
   </div>

       <div class="important-folder design-folder">
	   <h3 class="important-title design-title">
	   <?php
        $props = CFS()->get_field_info( 'important_text' );
		echo $props['label']; ?>
		</h3>    
		<div class="important-section design-section">
		 <div class="important-image design-image">
	    <img class="important-image" src="<?php echo CFS()->get ( 'important_image' )?>">
		</div>

         <div class="important-text design-text">
		<?php echo CFS()->get ( 'important_text' );?>
		</div>
        </div>
		</div>



		

	<!-- .entry-content -->
</article><!-- #post-## -->
