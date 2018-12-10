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

//LeaderBoard Prize Updates


function ume_get_prizes ($game_coins) {

	if ($game_coins >= 140) {
	return 12;
	}
else if ($game_coins >= 130) {
	 return 11;
}
else if ($game_coins >= 120) {
	 return 10;
}
else if ($game_coins >= 110) {
	return 9;
}
else if ($game_coins >= 100) {
	return 8;
}
else if ($game_coins >= 90) {
	return 7;
}
else if ($game_coins >= 80) {
	return 6;
}
else if ($game_coins >= 70) {
	return 5;
}
else if ($game_coins >= 60) {
	return 4;
}
else if ($game_coins >= 50) {
	return 3;
}
else if ($game_coins >= 40) {
	return 2;
}
else if ($game_coins >= 30) {
	return 1;
}
else{
	  return 0;
}

}


