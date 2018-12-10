<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package UME
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


//Limits search results to 8 games.
// Alter search posts per page

function ume_posts_per_page($query) {
    if ( $query->is_search ) {
        $query->set( 'posts_per_page', '8' );
    }
    return $query;
}
add_filter( 'pre_get_posts','ume_posts_per_page' );


