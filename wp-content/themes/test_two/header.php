<?php
/**
 * The header for our theme
 *
 */
?><!doctype html>
<html <?php language_attributes(); ?>> 
<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial scale=1">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="header_area">
	<div class="container">
		<div class="row">
			<div class="col-md-3" logo_area>
			<a href="<?php echo site_url(''); ?>"> <img src="<?php echo get_theme_mod('second_logo'); ?>" alt=""></a>
			</div>

			<div class="col-md-9">
				
				<?php wp_nav_menu( array('theme_location' => 'primary', 'menu_id' => 'nav'))?>
			</div>
		</div>
	</div>
</div>
 
<div id="page" class="site">

	<div id="content" class="site-content">


