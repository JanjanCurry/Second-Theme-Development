<?php


get_header();
?>

<div id="error_page">
	<div class="inner_error_page">
		<div class="error_section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
							<p>404 Error - Page Not Found</p>
			<h1><span>Ooops!</span> Looks Like <br> Something was Broken</h1>
			<div class="error_search_form">
				<?php get_search_form(); ?>
			</div>
			<a href="<?php echo home_url(); ?>" class="homepage">Homepage</a>
		
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>