<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package UME
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		
		<?php endif; ?>
	</header><!-- .entry-header -->
	
	
		<div class="thumbnail-image">
			<?php the_post_thumbnail( 'thumbnail' ); ?>
		</div>
    <div class="author">
	<h4> By: <?php echo CFS()->get ( 'game_author' ); ?> </h4>
    </div>
    <div class="arrow">
		
        <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/scroll-arrow.png"/>
</div>
    
	
</article><!-- #post-## -->



