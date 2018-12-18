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
function ume_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'ume_body_classes' );


//LeaderBoard Prizes


function ume_get_prizes ($game_coins) {

	if ($game_coins >= 500) {
	return 12;
	}
else if ($game_coins >= 300) {
	 return 11;
}
else if ($game_coins >= 250) {
	 return 10;
}
else if ($game_coins >= 200) {
	return 9;
}
else if ($game_coins >= 150) {
	return 8;
}
else if ($game_coins >= 100) {
	return 7;
}
else if ($game_coins >= 75) {
	return 6;
}
else if ($game_coins >= 50) {
	return 5;
}
else if ($game_coins >= 30) {
	return 4;
}
else if ($game_coins >= 20) {
	return 3;
}
else if ($game_coins >= 10) {
	return 2;
}
else if ($game_coins >= 5) {
	return 1;
}
else{
	  return 0;
}

}

//Front Page Prizes


function ume_get_icons ($game_coins) {

	$gems = array();

	if ($game_coins >= 5) {
	$gems[0]= '<img class="gem" src="'.get_template_directory_uri().'/assets/images/gems/diamond.png" alt="diamond">';
	}

 if ($game_coins >= 10) {
	$gems[1]= '<img class="gem" src="'.get_template_directory_uri().'/assets/images/gems/blue-diamond.png" alt="blue diamond>"';
}
 if ($game_coins >= 20) {
	$gems[2]= '<img class="gem" src="'.get_template_directory_uri().'/assets/images/gems/pink.png" alt="pink gem">';
}
 if ($game_coins >= 30) {
    $gems[3]= '<img class="gem" src="'.get_template_directory_uri().'/assets/images/gems/mystery-box-gems/gold-star.png" alt="gold-star">';
}
 if ($game_coins >= 50) {
	$gems[4]= '<img class="gem" src="'.get_template_directory_uri().'/assets/images/gems/purple.png" alt="purple gem">';
}
 if ($game_coins >= 75) {
	$gems[5]= '<img class="gem" src="'.get_template_directory_uri().'/assets/images/gems/orange.png" alt="orange gem">';
}
 if ($game_coins >= 100) {
    $gems[6]= '<img class="gem" src="'.get_template_directory_uri().'/assets/images/gems/light-blue.png" alt="light blue gem">';
}
 if ($game_coins >= 150) {
	$gems[7]= '<img class="gem" src="'.get_template_directory_uri().'/assets/images/gems/mystery-box-gems/heart.png" alt="heart gem">';
}
 if ($game_coins >= 200) {
	$gems[8]= '<img class="gem" src="'.get_template_directory_uri().'/assets/images/gems/red.png" alt="red gem">';
}
 if ($game_coins >= 250) {
	$gems[9]= '<img class="gem" src="'.get_template_directory_uri().'/assets/images/gems/yellow.png" alt="yellow gem">';
}
if ($game_coins >= 300) {
	$gems[10]= '<img class="gem" src="'.get_template_directory_uri().'/assets/images/gems/green-jewel.png" alt="green gem">';
}
 if ($game_coins >= 500) {
    $gems[11]= '<img class="gem" src="'.get_template_directory_uri().'/assets/images/gems/mystery-box-gems/raindrop.png" alt="raindrop gem">';
}

if(count($gems) > 3) {
	$gems = array_slice($gems, -3, 3, true);
}

return $gems;
}




