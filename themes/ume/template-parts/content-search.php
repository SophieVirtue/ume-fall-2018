<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package UME
 */

?>

<article data-id="<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark" class="play">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		
		<?php endif; ?>
	</header><!-- .entry-header -->
	
	
		<div class="thumbnail-image" data-id="<?php the_ID(); ?>">
		<?php the_post_thumbnail( 'thumbnail', printf( '<a href="%s" rel="bookmark" class="play">', esc_url( get_permalink() ) )); ?></a>
		</div>
    <div class="author">
	<h4> By: <?php echo CFS()->get ( 'game_author' ); ?> </h4>
    </div>
    <div class="search-arrow">
	<div class="arrow">
            <img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow.png" alt="Dropdown Arrow"/>
	</div>
	
	</div>
    <div class="drop-down" data-id="<?php the_ID(); ?>">
           <?php get_template_part( 'template-parts/content-drop' ); ?>
    </div>
	
</article><!-- #post-## -->



