
<section id="footer-widgets" class="row-fluid hidden-phone">
	<?php tha_sidebars_before(); ?>
	<div class="span3 well-small">
		<?php 
			tha_sidebar_top(); 
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('foot1') ) : endif; 
			tha_sidebar_bottom(); 
		?>
	</div>
	<div class="span3 well-small">
		<?php 
			tha_sidebar_top(); 
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('foot2') ) : endif; 
			tha_sidebar_bottom(); 
		?>
	</div>
	<div class="span3 well-small">
		<?php 
			tha_sidebar_top(); 
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('foot3') ) : endif; 
			tha_sidebar_bottom(); 
		?>
	</div>
	<div class="span3 well-small">
		<?php 
			tha_sidebar_top(); 
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('foot4') ) : endif; 
			tha_sidebar_bottom(); 
		?>
	</div>
	<?php tha_sidebars_after(); ?>
</section>