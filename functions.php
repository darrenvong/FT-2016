<?php

//Initial addition of responsive styling and jQuery

	wp_enqueue_style( 'Primary styles', get_stylesheet_uri() );
	wp_enqueue_style( 'Grid', get_stylesheet_directory_uri() . '/grid.css' );
	wp_enqueue_style( 'Responsive', get_stylesheet_directory_uri() . '/responsive.css' );
	wp_enqueue_style( 'FontAwesome', get_stylesheet_directory_uri() . '/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style( 'unsliderStyle', get_template_directory_uri() . '/unslider/unslider.css');



	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/jquery.js');
	wp_enqueue_script( 'masonry', 'https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js');
	wp_enqueue_script( 'unslider', get_template_directory_uri() . '/unslider/unslider.js');



//Load in jQuery UI on Elections page

function my_enqueue_stuff() {

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

function twelve_posts_on_homepage( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 16 );
    }
}
add_action( 'pre_get_posts', 'twelve_posts_on_homepage' );
