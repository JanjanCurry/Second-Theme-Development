<?php
/**
Footer Section
 */

?>
</div>
</div>

	<div id="footer_area">
		<div class="container">
			<div class="row">
				<div class="col-md-4">	
					<?php dynamic_sidebar('footer-widgets-1'); ?>
				</div>
				<div class="col-md-4">	
					<?php dynamic_sidebar('footer-widgets-2'); ?>
				</div>
				<div class="col-md-4">	
					<?php dynamic_sidebar('footer-widgets-3'); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="copyright_area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p><?php echo get_theme_mod('copyright_id') ?></p>
				</div>
			</div>
		</div>
	</div>
<?php wp_footer(); ?>

</body>
</html>
