<?php
/**
 * Template part for displaying single posts.
 *
 * @package UME
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-meta">
			<?php ume_posted_on(); ?>
			<?php ume_comment_count(); ?> 
			<?php ume_posted_by(); ?>
		</div><!-- end of entry-meta -->
	</header><!-- end of entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- end of entry-content -->
	<footer class="entry-footer">
		<?php ume_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
