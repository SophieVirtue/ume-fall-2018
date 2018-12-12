<?php
/**
 * The template for displaying all single posts.
 *
 * @package UME
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'design' ); ?>


         <?php echo CFS()->get ( 'work_flow_text' );?>

 <img class="work-flow-image" src="<?php echo CFS()->get ( 'work_flow_image' )?>">

         <?php echo CFS()->get ( 'character_text' );?>
 <img class="character-image" src="<?php echo CFS()->get ( 'character_image' )?>">

         <?php echo CFS()->get ( 'obstacles_text' );?>
     <img class="obstacles-image" src="<?php echo CFS()->get ( 'obstacles_image' )?>">

         <?php echo CFS()->get ( 'important_text' );?>

<img class="important-image" src="<?php echo CFS()->get ( 'important_image' )?>">






            
<?php endwhile; ?>
			


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
