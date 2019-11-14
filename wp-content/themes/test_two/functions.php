<?php 

include_once('inc/second_default.php');
include_once('inc/metabox.php');
include_once('inc/shortcode.php');


function second_script_enqueue(){

//BOOTSTRAP

	wp_enqueue_style( "fontawesome", '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	 wp_register_style( 'pluginscss', get_template_directory_uri() . '/css/plugins.css', array(), '1.0.0', 'all');
	 wp_enqueue_style('pluginscss');	
	 wp_register_style( 'bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
	 wp_enqueue_style('bootstrapcss');	
	wp_register_style('customstyle', get_template_directory_uri() . '/css/second.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle');


	wp_enqueue_script('jquery');
	wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.3.1', 'true');
	wp_enqueue_script('bootstrapjs');
	wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', array(), '1.0.0', 'true');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/second.js', array('jquery'), '4.3.1', 'true');
	wp_enqueue_style('style', get_stylesheet_uri());	
}

add_action('wp_enqueue_scripts', 'second_script_enqueue');

// Theme Functions
function second_customizer_register($wp_customize){

	//Header Area
	$wp_customize->add_section('second_header_top_logo', array (
		'title' => __('Header Area', 'testtwo'),
		'description' => 'IUpdate Your Logo Here'
	));
	$wp_customize->add_setting('second_logo', array(
		'default' => get_bloginfo('template_directory'). '/img/screenshot.png'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'second_logo', array(
			'label'=>'Logo',
			'description' => 'Upload Your Logo Here',
			'section' => 'second_header_top_logo',
			'settings' => 'second_logo'
	)	));
	// Colors Area
	$wp_customize->add_section('sec_colors', array (
		'title' => __('Background Color Area', 'testtwo'),
		'description' => 'Customize Your Background Color Here'
	));
	$wp_customize->add_setting('sec_bgcolor_id', array(
		'default' => '#ffffff'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sec_bgcolor_id', array(
			'label'=>'Logo',
			'description' => 'Change Your Background Color Here',
			'section' => 'sec_colors',
			'settings' => 'sec_bgcolor_id'
	)	));
	$wp_customize->add_setting('sec_link_bgcolor_id', array(
		'default' => '#262626'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sec_link_bgcolor_id', array(
			'label'=>'Logo',
			'description' => 'Change Your Link Background Color Here',
			'section' => 'sec_colors',
			'settings' => 'sec_link_bgcolor_id'
	)	));
	// Copyright Area
	$wp_customize->add_section('second_copyright_section', array (
		'title' => __('Copyright Area', 'testtwo'),
		'description' => 'Update Your Logo Here'
	));
	$wp_customize->add_setting('copyright_id', array(
		'default' => '&copy: Copyright 2019 | My Other Website Test',
	));
	$wp_customize->add_control('copyright_id', array(
			'label'=>'Copyright Text',
			'description' => 'You can Uodate Your Copyright Text Here',
			'section' => 'second_copyright_section',
			'settings' => 'copyright_id'
	)	);

}
add_action('customize_register','second_customizer_register');

// IMPLEMENT CUSTOM BG-COLOR
function sec_theme_customize_bgcolor(){
	?>
		<style type="text/css"> body{background: <?php echo get_theme_mod('sec_bgcolor_id'); ?>}
	#blog_section .post_part a.readmore { background: <?php echo get_theme_mod('sec_link_bgcolor_id'); ?>}
	#searchform input#searchsubmit {
    background: <?php echo get_theme_mod('sec_link_bgcolor_id'); ?>
		 </style>
	<?php
}
add_action( 'wp_head', 'sec_theme_customize_bgcolor' );
//Menu Functions
 register_nav_menu('primary', __('Main Menu', 'testtwo'));

 //for SIDEBAR
 function sec_widgets_init()
 {
 	register_sidebar(array(
 		'name' => __('Main Widget Area', 'testtwo'),
 		'id' => 'sidebar-1',
 		'description' => __('Appearance in the sidebar in blog page also post and other pages.', 'testtwo'),
 		'before_widget' => '<div class="child_sidebar">',
 		'after_widget' => '</div>',
 		'before_title' => '<h2 class="title">',
 		'after_title' => '</h2>',
 	));
 	register_sidebar(array(
 		'name' => __('Footer Area One', 'testtwo'),
 		'id' => 'footer-widgets-1',
 		'description' => __('Appearance in the Footer in blog page also post and other pages.', 'testtwo'),
 		'before_widget' => '<div class="child_footer">',
 		'after_widget' => '</div>',
 		'before_title' => '<h2 class="title">',
 		'after_title' => '</h2>',
 	));
 	register_sidebar(array(
 		'name' => __('Footer Area Two', 'testtwo'),
 		'id' => 'footer-widgets-2',
 		'description' => __('Appearance in the Footer in blog page also post and other pages.', 'testtwo'),
 		'before_widget' => '<div class="child_footer">',
 		'after_widget' => '</div>',
 		'before_title' => '<h2 class="title">',
 		'after_title' => '</h2>',
 	));
 	register_sidebar(array(
 		'name' => __('Footer Area Three', 'testtwo'),
 		'id' => 'footer-widgets-3',
 		'description' => __('Appearance in the Footer in blog page also post and other pages.', 'testtwo'),
 		'before_widget' => '<div class="child_footer">',
 		'after_widget' => '</div>',
 		'before_title' => '<h2 class="title">',
 		'after_title' => '</h2>',
 	));
 }
 add_action('widgets_init', 'sec_widgets_init');

 //Read more Function
 function new_excerpt_more($more)
 {
 	global $post;
 	return '<br> <a class="readmore" href=" '.get_permalink($post->ID) . '">'.'Read More'. '</a>';
 }
 add_filter( 'excerpt_more', 'new_excerpt_more' );
 //excerpt function, Number of Words to be Displayed
 function sec_excerpt_length(){
 	return 40;
 }
 add_filter( 'excerpt_length', 'sec_excerpt_length' );

 // PAGE NAV FUNCTION
 function pagenav(){
 	global $wp_query, $wp_rewrite;
 	$pages = '';
 	$max = $wp_query->max_num_pages;
 	if (!$current = get_query_var('paged')) $current = 1;
 	$args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
 	$args['total'] = $max;
 	$args['current'] = $current;
 	$total = 1;
 	$args['mid-size'] = 3;
 	$args['end-size'] = 1;
 	$args['prev_text'] = 'Prev';
 	$args['next_text'] = 'Next';
 	if ($max > 1) echo '</pre>
 	<div class="wp-navi">';
 		if ($total ==1 && $max > 1 ) $pages = '<span class="pages"> Page ' . $current . ' of ' . $max . '</span>';
 		echo $pages . paginate_links($args);
 if ($max > 1) echo '<div> <pre>';
 }

// CUSTOM POST TYPES
function custom_slider(){
	register_post_type( 'slider',
			array(
				'labels' => array(
					'name' => ('Slider'),
					'singular_name' => ('Slider'),
					'add_new' => ('Add New Slider'),
					'add_new_item' => ('Add New Slider'),
					'edit_item' => ('Edit New Slider'),
					'new_item' => ('New Slider'),
					'view_item' => ('View Slider'),
					'not_found' => ('No Slider Found'),
				),
				'menu_icon' => 'dashicons-format-gallery',
				'public' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => true,
				'menu_position' => 4,
				'has_archive' => true,
				'hierarchial' => true,
				'show_ui' => true,
				'capability_type' => 'post',
				'rewrite' => array('slug' => 'slider'),
				'supports' => array('title','thumbnail','editor','excerpt',),
				
			));

	register_post_type( 'service',
			array(
				'labels' => array(
					'name' => ('Service'),
					'singular_name' => ('Service'),
					'add_new' => ('Add New Service'),
					'add_new_item' => ('Add New Service'),
					'edit_item' => ('Edit New Service'),
					'new_item' => ('New Service'),
					'view_item' => ('View Service'),
					'not_found' => ('No Services Found'),
				),
				'menu_icon' => 'dashicons-admin-tools',
				'public' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => true,
				'menu_position' => 4,
				'has_archive' => true,
				'hierarchial' => true,
				'show_ui' => true,
				'capability_type' => 'post',
				'rewrite' => array('slug' => 'service'),
				'supports' => array('title','thumbnail','editor','excerpt',),
				
			));

	register_post_type( 'team',
			array(
				'labels' => array(
					'name' => ('Team'),
					'singular_name' => ('Team'),
					'add_new' => ('Add New Team'),
					'add_new_item' => ('Add New Team'),
					'edit_item' => ('Edit New Team'),
					'new_item' => ('New Team'),
					'view_item' => ('View Team'),
					'not_found' => ('No Team Found'),
				),
				'menu_icon' => 'dashicons-groups',
				'public' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => true,
				'menu_position' => 4,
				'has_archive' => true,
				'hierarchial' => true,
				'show_ui' => true,
				'capability_type' => 'post',
				'rewrite' => array('slug' => 'service'),
				'supports' => array('title','thumbnail','editor','excerpt',),
				
			));

}
add_action( 'init', 'custom_slider');
