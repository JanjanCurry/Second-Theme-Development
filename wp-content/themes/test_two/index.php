<?php


get_header();
?>

<div id="blog_section">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php if (have_posts()) {
							while (have_posts()) {
								the_post();?>
			
				<div class="blog-post">

					<div class="thumbnail">
					<?php if (has_post_thumbnail()) {?>
					<img src="<?php echo the_post_thumbnail_url(); ?>" alt="">	
					<?php }
					else{
						echo '<img src="'. get_bloginfo( 'stylesheet_directory').'/img/no-featured-image.jpg'.'"/>';
					}
					 
					
					 	?>
					<?php //the_post_thumbnail('thumbnail'); ?>
					
					</div>
					<div class="post_part">
						<h2><a href="<?php the_permalink(); ?>"> <?php echo the_title(); ?></a></h2>
						<?php echo the_excerpt(); ?>
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
	

	<div class="pagenavarea">
				<div id="pagenavi">
					<?php if ('pagenav') {
						pagenav();					
					} else { ?>
							<?php next_posts_link('<span class="alignright"> Older Post </span>') ?>
							<?php previous_posts_link('<span class="alignright"> Newer Post </span>') ?>
							
						<?php
							}
						?>
				</div>
			</div>
	</div>
</div>
<?php
get_footer();

?>