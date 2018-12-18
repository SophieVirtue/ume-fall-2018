<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package UME
 */

if ( ! function_exists( 'red_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function red_starter_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // red_starter_setup
add_action( 'after_setup_theme', 'red_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function red_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'red_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'red_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function red_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'red_starter_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function red_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'red_starter_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */

function ume_scripts() {
	wp_enqueue_style( 'ume-style', get_stylesheet_uri() );
	wp_enqueue_style('ume-fontawesome', "https://use.fontawesome.com/releases/v5.5.0/css/all.css" );
	wp_enqueue_style('ume-flickity-css', "https://unpkg.com/flickity@2/dist/flickity.min.css" );
	wp_enqueue_script( 'ume-navigation', get_template_directory_uri() . '/build/js/navigation.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ume-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ume-custom', get_template_directory_uri() . '/build/js/custom.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'ume-api', get_template_directory_uri() . '/build/js/api.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script('ume-flickity-js', "https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js" );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_localize_script( 'ume-api', 'ume_vars', array(
		'rest_url' => esc_url_raw( rest_url() ),
		'post_id' => get_the_ID(),
		'nonce' => wp_create_nonce( 'wp_rest' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'ume_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/rest-api.php';

//Page Slug Body Class
function ume_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
	$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
	}
add_filter( 'body_class', 'ume_slug_body_class' );

function ume_custom_search_query($query){
	if (!is_admin() && $query->is_search){
		$query->set('post_type', 'game');
	};
}
add_filter('pre_get_posts', 'ume_custom_search_query' );



/**
 * Extend WordPress search to include custom fields
 *
 * https://adambalee.com/search-wordpress-by-custom-fields-without-a-plugin/
 */

/**
 * Join posts and postmeta tables
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function ume_search_join($join)
{
    global $wpdb;

    if (is_search()) {
        $join .= ' LEFT JOIN ' . $wpdb->postmeta . ' ON ' . $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }

    return $join;
}
add_filter('posts_join', 'ume_search_join');

/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function ume_search_where($where)
{
    global $pagenow, $wpdb;

    if (is_search()) {
        $where = preg_replace(
            "/\(\s*" . $wpdb->posts . ".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(" . $wpdb->posts . ".post_title LIKE $1) OR (" . $wpdb->postmeta . ".meta_value LIKE $1)", $where);
    }

    return $where;
}
add_filter('posts_where', 'ume_search_where');

/**
 * Prevent duplicates
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function ume_search_distinct($where)
{
    global $wpdb;

    if (is_search()) {
        return "DISTINCT";
    }

    return $where;
}
add_filter('posts_distinct', 'ume_search_distinct');





