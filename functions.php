<?php
/*****************************************************************************/
/*Define Constants*/
/*****************************************************************************/

define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES',THEMEROOT. '/images');
function ss_setup() {
	/*
	 * Makes voyage available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Thirteen, use a find and
	 * replace to change 'twentythirteen' to the name of your theme in all
	 * template files.
	 */
	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );
	/*
	 * This theme supports all available post formats by default.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );
	// This theme uses wp_nav_menu() in one location.

	register_nav_menu( 'primary-left', __( 'Navigation Menu Left', 'ss' ) );
	register_nav_menu( 'primary-right', __( 'Navigation Menu Right', 'ss' ) );
	register_nav_menu( 'footer', __( 'Footer Menu', 'ss' ) );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'press-image-large', 924,346,array( center, center ));
	add_image_size( 'gallery-image-thumb', 300,200);
}

add_action( 'after_setup_theme', 'ss_setup' );


/**
* Enqueue Scripts and Styles for Front-End
*/
function ss_assets() {
		wp_deregister_script('jquery-masonry');
		wp_enqueue_script('jquery');
		wp_enqueue_style( 'styles', get_template_directory_uri().'/style.css',false,'0.0.0.1', 'all' );
		// Load JavaScripts jquery.fitvids
		wp_enqueue_script('modernizr', get_template_directory_uri().'/js/modernizr.js', false, '2.6.2', true);
		wp_enqueue_script('easing', get_template_directory_uri().'/js/jquery.easing.1.3.js',false,'1.3',true);
		wp_enqueue_script('waypoints', get_template_directory_uri().'/js/waypoints.mim.js',false,'2.0.2',true);
		wp_enqueue_script('mixitup',get_template_directory_uri().'/js/jquery.mixitup.min.js',false,'1.5.5',true);
		wp_enqueue_script('scroll', get_template_directory_uri().'/js/jquery.scrollTo.min.js',false,'1.4.6',ture);
		wp_enqueue_script('gray',get_template_directory_uri() . '/js/jquery.gray.min.js',array('jquery'),null,true);
		wp_enqueue_script('imageload',get_template_directory_uri().'/js/imagesloaded.pkgd.min.js',false,null,true);
		wp_enqueue_script('infinite',get_template_directory_uri().'/js/jquery.infinitescroll.min.js',false,null,true);
		wp_enqueue_script('main',get_template_directory_uri() . '/js/main.js',array('jquery'),null,true);
		// Load Google Fonts API
}

add_action( 'wp_enqueue_scripts', 'ss_assets' );

if ( ! function_exists( 'ss_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 */
function ss_paging_nav() {
	global $wp_query;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<div class="nav-links">

		<?php if ( get_next_posts_link() ) : ?>
		<div class="page-previous"><?php next_posts_link( __( '', 'ss' ) ); ?></div>
		<?php endif; ?>

		<?php if ( get_previous_posts_link() ) : ?>
		<div class="page-next"><?php previous_posts_link( __( '', 'ss' ) ); ?></div>
		<?php endif; ?>

	</div><!-- .nav-links -->
	<?php
}
endif;

if ( ! function_exists( 'ss_post_nav' ) ) :
/**
 * Displays navigation to next/previous post when applicable.
*/
function ss_post_nav() {
	global $post;

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
	<nav id="nav-below" class="nav-pagination clearfix">
        <div class="nav-previous">
          	<?php previous_post_link( '%link', _x('Previous Post','test1','ss' ) ); ?>
        </div>
        <div class="nav-next">
           	<?php next_post_link( '%link', _x( 'Next Post','test2','ss' ) ); ?>
        </div>
    </nav> 
	<?php
}
endif;

function custom_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	
function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');