<?php


get_header();
?>

<div id="blog_section" class="pages">
	<div class="container">
		<div class="row">
								<div class="col-md-8">
				<?php if (have_posts()) {
							while (have_posts()) {
								the_post();?>
			
				<div class="blog-post">

					<div class="thumbnail">
					<?php //the_post_thumbnail('thumbnail'); ?>
					
					</div>
					<div class="post_part">
						<h2><a href="<?php the_permalink(); ?>"> <?php echo the_title(); ?></a></h2>
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

			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	
	</div>
</div>
<?php
get_footer();

?>