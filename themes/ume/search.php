<?php
/**
 * The template for displaying search results pages.
 *
 * @package UME
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h2 class="search-results-header">Search Results</h2>

		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span id="inquired">' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->
			<div class="search-results-container">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="search-game">
						<?php get_template_part( 'template-parts/content', 'search' ); ?>

						 <div class="drop-down">
           <?php get_template_part( 'template-parts/content-drop' ); ?>
    </div><!-- end of featured game drop down -->

						
						<!-- ADD get template part 'content-drop and add here with class search-drop-down' -->
					
					  
					</div>

				<?php endwhile; ?>

			

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>




		</div>

		</main><!-- #main -->
	</section><!-- #primary -->


<?php get_footer(); ?>




