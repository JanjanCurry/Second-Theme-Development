<?php 

// SHORTCODE FUNCTION

function sec_slider_shortcode( $atts ){
ob_start();
 ?>
	
<div id="slider_area">
	<div class="bxslider">
<?php	$args = array('post_type' => 'slider', 'posts_per_page' => 5);
	$loop = new WP_Query( $args ); 
	if ( $loop->have_posts() ) : 
while( $loop->have_posts() ) : $loop->the_post(); ?>
	
		<div class="item">
			<?php echo the_post_thumbnail('slider'); ?>
			<div class="slider_inner">
				<div class="slider_table">
					<div class="slider_display">
						<div class="slider_main">
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>			
						</div>
					</div>
				</div>
			</div> 
		</div>
<?php
endwhile;

wp_reset_query();
?>

<?php
endif;


?>	</div>
</div>


	<?php
$myvariable = ob_get_clean();
return $myvariable;
}


add_shortcode( 'slider', 'sec_slider_shortcode');

// SHORTCODE POST FUNCTION

function sec_post_shortcode( $atts ){
ob_start();
?>
<div id="blog_section" class="pages">
	<div class="container">
		<div class="row">
				
			<div class="col-md-12">

				<?php 
					$args = array('post_type' => 'post', 'posts_per_page' => 5);
					$loop = new WP_Query( $args ); 
				if ($loop->have_posts()) {
							while ($loop->have_posts()) {
								$loop->the_post();?>			
				<div class="blog-post">
					<div class="post_part">
						<h2><a href="<?php the_permalink(); ?>"> <?php echo the_title(); ?></a></h2>
						<?php echo the_content(); ?>
					</div>
</div>
<?php
							}
						}

						  else{

							?>
						<h3>404 Page Not Found!!</h3>
							<?php
						} 

						wp_reset_query();?>
		</div>			
		</div>	
	</div>
</div>

	<?php
$postvariable = ob_get_clean();
return $postvariable;
}

add_shortcode( 'post_shortcode', 'sec_post_shortcode');


function sec_service_area( $atts ){
ob_start();
?>
	<?php 
					$args = array('post_type' => 'service', 'posts_per_page' => 3);
					$loop = new WP_Query( $args ); 
					if ($loop->have_posts()) {
				?>
					<div id="service_area">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<h2>Our Services</h2>
								</div>
							</div>
			
							<div class="row">
						<?php 
							while ($loop->have_posts()) {
								$loop->the_post();?>
								<div class="col-md-4">
									<a href="<?php the_permalink(); ?>" class="child_service">				
										<i class="fa fa-<?php echo (get_post_meta( get_the_ID(), '_service_fontawsome_icon_value_key', true ));  ?>"></i>
										<h4><?php the_title(); ?></h4>
											<?php echo get_the_excerpt(); ?>
								</a> </div>
								<?php } ?>
							</div>
						
				<?php
							
							
						}


						wp_reset_query();?>
</div>
					</div>
	<?php
$servicevariable = ob_get_clean();
return $servicevariable;
}

add_shortcode('servicearea', 'sec_service_area');

// OUR TEAM
function sec_team_area( $atts ){
ob_start();
?>
	<?php 
					$args = array('post_type' => 'team', 'posts_per_page' => 4);
					$loop = new WP_Query( $args ); 
					if ($loop->have_posts()) {
				?>
					<div id="team_area">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<h2>OUR TEAM</h2>
								</div>
							</div>			
							<div class="row">
						<?php 
							while ($loop->have_posts()) {
								$loop->the_post();?>
								<div class="col-md-3">

									<a href="" class="child_service">			
										<?php echo the_post_thumbnail('team'); ?>	
										<h4><?php the_title(); ?></h4>
											<?php echo get_the_excerpt(); ?>
								</a> </div>
								<?php } ?>
							</div>	
				<?php							
						}
						wp_reset_query();?>
</div>
					</div>
	<?php
$teamvariable = ob_get_clean();
return $teamvariable;
}

add_shortcode('teamarea', 'sec_team_area');