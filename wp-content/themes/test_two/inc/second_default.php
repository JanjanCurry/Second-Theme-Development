<?php 

//TITLE
add_theme_support( 'title-tag' ); 
 // POST AND PAGE THUMBNAIL
 add_theme_support( 'post-thumbnails', array('post', 'page', 'slider', 'service', 'team',) );
//SLIDER IMAGE CUSTOM SIZE
add_image_size( 'slider', 1920, 700, true );
add_image_size( 'team', 200, 300, true );

function custom_excerpt_length( $length ) {
	return 35;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999);