<?php


get_header();
?>

<div id="blog_section" class="posts">
	<div class="container">
		<div class="row">
								<div class="col-md-12">
				<?php if (have_posts()) {
							while (have_posts()) {
								the_post();?>
			
				<div class="blog-post">

					<div class="thumbnail">
					 					
					 <?php //the_post_thumbnail('thumbnail'); ?>
					
					</div>
					<div class="post_part">
						<h2> <?php echo the_title(); ?> </h2>
						<?php echo the_content(); ?>
					</div>

</div>
				

<?php
							}
						}  else{

							?>
						<h3>404 Page Not Found!!</h3>
							<?php
						} ?>
			
</div>			

			
		</div>
	
	</div>
</div>
<?php
get_footer();

?>