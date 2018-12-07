<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...

// Register Custom Taxonomy
function game_category_taxonomy() {

	$labels = array(
		'name'                       => 'Game Categories',
		'singular_name'              => 'Game Category',
		'menu_name'                  => 'Game Category',
		'all_items'                  => 'All Game Categories',
		'parent_item'                => 'Parent Game Category',
		'parent_item_colon'          => 'Parent Game Category:',
		'new_item_name'              => 'New Game Category Name',
		'add_new_item'               => 'Add Game Category Item',
		'edit_item'                  => 'Edit Game Category',
		'update_item'                => 'Update Game Category',
		'view_item'                  => 'View Game Category',
		'separate_items_with_commas' => 'Separate Game Categories with commas',
		'add_or_remove_items'        => 'Add or remove Game Categories',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Game Categories',
		'search_items'               => 'Search Game Categories',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Game Categories',
		'items_list'                 => 'Game Categories list',
		'items_list_navigation'      => 'Game Categories list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,

	);
	register_taxonomy( 'game_category', array( 'game' ), $args );

}
add_action( 'init', 'game_category_taxonomy', 0 );









