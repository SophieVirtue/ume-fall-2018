<?php
/**
 * The template for displaying all pages.
 *
 * @package UME
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			
				<?php get_template_part( 'template-parts/content', 'download' ); ?>

			<?php endwhile; ?> 
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>


