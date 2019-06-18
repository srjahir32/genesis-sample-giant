<?php /* 
Template Name: Grid_blog
*/ 
?>

<div class="grid_blog_full_width">
<?php // Display blog posts on any page @ https://m0n.co/l
    $temp = $wp_query; $wp_query= null;
    $wp_query = new WP_Query(); $wp_query->query('posts_per_page=6' . '&paged='.$paged);
    while ($wp_query->have_posts()) : $wp_query->the_post();
     endwhile; 


//* Grid Style Content Archive 
function be_archive_post_class( $classes ) {
	if( !is_home() ) 
	return $classes;
	$classes[] = 'one-third';
	global $wp_query;
	if( 0 == $wp_query->current_post || 0 == $wp_query->current_post % 3 )
	$classes[] = 'first';
	return $classes;
}
add_filter( 'post_class', 'be_archive_post_class' );


//* Customize read more text
add_filter( 'excerpt_more', 'genesis_read_more_link' );
add_filter( 'get_the_content_more_link', 'genesis_read_more_link' );
add_filter( 'the_content_more_link', 'genesis_read_more_link' );

function genesis_read_more_link() {
	return '<a class="more-link read_more_btn" href="' . get_permalink() . '"> Read More</a>';
}
// remove page heading
remove_action( 'genesis_before_loop', 'genesis_do_posts_page_heading' );

// set image above the post title
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
add_action( 'genesis_entry_header', 'genesis_do_post_image', 8 );

// remove breadcrumbs
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

// remove Post Meta from Entry Footer 
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

// set full with layout
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );


genesis();

?></div>