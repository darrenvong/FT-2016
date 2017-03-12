<?php

//Load in jQuery UI on Elections page

function my_enqueue_stuff() {
  //Initial addition of responsive styling and jQuery

  wp_enqueue_style( 'Primary styles', get_stylesheet_uri() );
  wp_enqueue_style( 'Grid', get_stylesheet_directory_uri() . '/grid.css' );
  wp_enqueue_style( 'Responsive', get_stylesheet_directory_uri() . '/responsive.css' );
  wp_enqueue_style( 'FontAwesome', get_stylesheet_directory_uri() . '/font-awesome/css/font-awesome.min.css');
  wp_enqueue_style( 'unsliderStyle', get_template_directory_uri() . '/unslider/unslider.css');



  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/jquery.js');
  wp_enqueue_script( 'masonry', 'https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js');
  wp_enqueue_script( 'unslider', get_template_directory_uri() . '/unslider/unslider.js');

  if ( is_page( 11189 ) ) {

    wp_enqueue_script( 'jQueryUI', 'http://code.jquery.com/ui/1.11.4/jquery-ui.js');

  }


}
add_action( 'wp_enqueue_scripts', 'my_enqueue_stuff' );


//Adds in Google Web fonts

	function load_fonts() {
		wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Noto+Serif:400,700');
		wp_enqueue_style( 'googleFonts');
	}

	add_action('wp_print_styles', 'load_fonts');

	register_nav_menus(array(
	 'left' => __('Left Menu'),
	 'right' => __('Right Menu'),
	));

//Allows featured images

add_theme_support( 'post-thumbnails' );

//Trims excerpt

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



//Hide uncatgegorised on frontend

add_filter('get_the_terms', 'hide_categories_terms', 10, 3);
function hide_categories_terms($terms, $post_id, $taxonomy){

    $exclude = array('uncategorized', 'elections');

    if (!is_admin()) {
        foreach($terms as $key => $term){
            if($term->taxonomy == "category"){
                if(in_array($term->slug, $exclude)) unset($terms[$key]);
            }
        }
    }

    return $terms;
};




// Get URL of first image in a post

function first_post_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];

	// no image found display default image instead
	if(empty($first_img)){
	$first_img = "/images/default.jpg";
	}
	return $first_img;
}


//Alter number of post tiles on homepage

function twenty_posts_on_homepage( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $outlets = array( 'tv', 'press', 'sport', 'elections-2017', 'varsity-2017');
        $num_posts_to_display = 20;
        $posts_to_display = get_equal_num_posts_from_each_outlet( $outlets, $num_posts_to_display );

        $query->set( 'post__in', $posts_to_display );
        $query->set( 'posts_per_page', $num_posts_to_display );
    }
}
add_action( 'pre_get_posts', 'twenty_posts_on_homepage' );

/**
 * A simple filtering algorithm to ensure (roughly) the same number of posts
 * from each outlet of Forge appears on the home page.
 * @param $outlets  An array containing the (names of the) outlets' post to be
 * evenly distributed
 * @return array  of ids of posts to be displayed on front page
 */
function get_equal_num_posts_from_each_outlet( $outlets, $num_posts_to_display ) {
  $posts_to_display = array();
  foreach ( $outlets as $outlet ) {
    $query_args = array(
      'category_name' => $outlet,
      'posts_per_page' => intval( $num_posts_to_display / count( $outlets ) ),
      'fields' => 'ids'
    );
    // Randomise posts from Elections candidates
    if ( $outlet === 'elections-2017' ) { $query_args['orderby'] = 'rand'; }

    $outlet_query = new WP_Query( $query_args );
    $posts_to_display = array_merge($posts_to_display, $outlet_query->posts);
  }
  return $posts_to_display;
}
