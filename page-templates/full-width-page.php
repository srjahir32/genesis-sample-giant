<?php /* 
Template Name: Page full width
*/ 


//* Add custom body class to the head
add_filter( 'body_class', 'sp_body_class' );
function sp_body_class( $classes ) {
	
	$classes[] = 'page_full_width';
	return $classes;
	
}
//* Remove the entry title (requires HTML5 theme support)
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

//Remove Sidebar in page
remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

genesis();
