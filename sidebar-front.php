<section id="widgets" class="row-fluid">
	<?php tha_sidebars_before(); ?>
	<div class="span4 well well-large">
		<?php 
			tha_sidebar_top(); 
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('front1') ) : endif; 
			tha_sidebar_bottom(); 
		?>
	</div>
	<div class="span4 well well-large">
		<?php 
			tha_sidebar_top(); 
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('front2') ) : endif; 
			tha_sidebar_bottom(); 
		?>
	</div>
	<div class="span4 well well-large">
		<?php 
			tha_sidebar_top(); 
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('front3') ) : endif; 
			tha_sidebar_bottom(); 
		?>
	</div>
	<?php tha_sidebars_after() ?>
</section>