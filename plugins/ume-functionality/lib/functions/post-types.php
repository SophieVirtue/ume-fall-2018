<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function game_post_type() {

	$labels = array(
		'name'                  => _x( 'Games', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Game', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Games', 'text_domain' ),
		'name_admin_bar'        => __( 'Game', 'text_domain' ),
		'archives'              => __( 'Game Archives', 'text_domain' ),
		'attributes'            => __( 'Game Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Game:', 'text_domain' ),
		'all_items'             => __( 'All Games', 'text_domain' ),
		'add_new_item'          => __( 'Add New Game', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Game', 'text_domain' ),
		'edit_item'             => __( 'Edit Game', 'text_domain' ),
		'update_item'           => __( 'Update Game', 'text_domain' ),
		'view_item'             => __( 'View Game', 'text_domain' ),
		'view_items'            => __( 'View Games', 'text_domain' ),
		'search_items'          => __( 'Search Game', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into game', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this game', 'text_domain' ),
		'items_list'            => __( 'Games list', 'text_domain' ),
		'items_list_navigation' => __( 'Games list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter games list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Game', 'text_domain' ),
		'description'           => __( 'Game type.', 'text_domain' ),
		'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'            => array( 'game_category' ),
		'menu_icon'             => 'dashicons-heart',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'game', $args );

}
add_action( 'init', 'game_post_type', 0 );

// Register Design Post Type
function design_post_type() {

	$labels = array(
		'name'                  => _x( 'Designs', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Design', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Designs', 'text_domain' ),
		'name_admin_bar'        => __( 'Design', 'text_domain' ),
		'archives'              => __( 'Design Archives', 'text_domain' ),
		'attributes'            => __( 'Design Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Design:', 'text_domain' ),
		'all_items'             => __( 'All Designs', 'text_domain' ),
		'add_new_item'          => __( 'Add New Design', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Design', 'text_domain' ),
		'edit_item'             => __( 'Edit Design', 'text_domain' ),
		'update_item'           => __( 'Update Design', 'text_domain' ),
		'view_item'             => __( 'View Design', 'text_domain' ),
		'view_items'            => __( 'View Designs', 'text_domain' ),
		'search_items'          => __( 'Search Design', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into design', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this design', 'text_domain' ),
		'items_list'            => __( 'Designs list', 'text_domain' ),
		'items_list_navigation' => __( 'Designs list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter designs list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Design', 'text_domain' ),
		'description'           => __( 'Design type.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'design', $args );

}
add_action( 'init', 'design_post_type', 0 );