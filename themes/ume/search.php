<?php
/**
 * The template for displaying search results pages.
 *
 * @package UME
 */

get_header(); 
get_sidebar(); ?>


<section id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<h2 class="search-results-header">Search Results:</h2>
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<h1 class="page-title"><?php printf( esc_html( 'Search results for: %s' ), '<span id="inquired">' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->
				<div class="search-results-container" data-id="<?php the_ID(); ?>"">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="search-game" data-id="<?php the_ID(); ?>">
							<?php get_template_part( 'template-parts/content', 'search' ); ?>
						</div><!-- end of search-game -->
					<?php endwhile; ?>
				</div><!-- end of search-results-container -->
			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>
	</main><!-- #main -->
</section><!-- #primary -->


<?php get_footer(); ?>




