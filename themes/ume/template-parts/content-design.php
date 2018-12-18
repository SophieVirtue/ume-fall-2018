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
	</header><!-- end of entry-header -->
    <div class="work-folder design-folder">
	   <h3 class="work-title design-title">
	   		<?php
        		$props = CFS()->get_field_info( 'work_flow_text' );
				echo $props['label']; 
			?>
		</h3><!-- end of work-title -->
        <div class="work-section design-section">  
	      	<div class="work-image design-image">
              	<img class="work-flow-image" src="<?php echo CFS()->get ( 'work_flow_image' )?>" alt="Game Work Flow Image">
			</div><!-- end of work-image -->
			<div class="design-border">
            </div><!-- end of design border -->
          	<div class="work-text design-text">
		         <?php echo CFS()->get ( 'work_flow_text' );?>
			</div><!-- end of design-text -->
        </div><!-- end of work-section -->
	</div><!-- end of work-folder -->
	<div class="character-folder design-folder">
		<h3 class="character-title design-title">
			<?php
				$props = CFS()->get_field_info( 'character_text' );
				echo $props['label']; 
			?>
		</h3>
		<div class="character-section design-section">
			<div class="character-image design-image">
				<img class="character-image" src="<?php echo CFS()->get ( 'character_image' )?>" alt="Game Character Set up Image">
			</div><!-- end of character-design-image -->
			<div class="design-border">
			</div><!-- end of design-border -->
			<div class="character-text design-text">
				<?php echo CFS()->get ( 'character_text' );?>
			</div><!-- end of character design-text -->
		</div><!-- end of design section -->
	</div><!-- end of design folder -->
	<div class="obstacles-folder design-folder">
		<h3 class="obstacles-title design-title">
			<?php
				$props = CFS()->get_field_info( 'obstacles_text' );
				echo $props['label']; 
			?>
		</h3>
		<div class="obstacles-section design-section">
			<div class="obstacles-image design-image">
				<img class="obstacles-image" src="<?php echo CFS()->get ( 'obstacles_image' )?>" alt="Game Obstacles Image">
			</div><!-- end of obstacles-image -->
			<div class="design-border">
			</div><!-- end of design-border -->
			<div class="obstacles-text design-text">
				<?php echo CFS()->get ( 'obstacles_text' );?>
			</div>	<!-- end of obstacles-text -->
		</div><!-- end of obstacles-section -->
	</div><!-- end of obstacles-folder -->
	<div class="important-folder design-folder">
		<h3 class="important-title design-title">
			<?php
				$props = CFS()->get_field_info( 'important_text' );
				echo $props['label']; 
			?>
		</h3>
		<div class="important-section design-section">
			<div class="important-image design-image">
	    		<img class="important-image" src="<?php echo CFS()->get ( 'important_image' )?>" alt="Important Game Info Image">
			</div><!-- end of important-image -->
			<div class="design-border">
			</div><!-- end of design-border -->
			<div class="important-text design-text">
				<?php echo CFS()->get ( 'important_text' );?>
			</div><!-- end of important-text -->
		</div><!-- end of important-section -->
	</div><!-- end of important-folder -->
	<!-- .entry-content -->
</article><!-- #post-## -->
