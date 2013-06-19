<?php
/**
 * The fixed navbar for the template.
 *
 * @package Uncorked
 */
?>

<div class="navbar-inner">
	<div class="container-fluid">
		<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
		<a href="#" class="btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-reorder icon-large"></span>
		</a>
		<div class="nav-collapse">
			<?php wp_nav_menu( array(
				'theme_location' => 'primary', 
				'menu_class' => 'nav', 
				'depth' => 3, 
				'fallback_cb' => false, 
				'container' => false, 
				'walker'			=>	new The_Bootstrap_Nav_Walker,
				) ); ?>
		</div>
	</div><!-- .container-fluid -->
</div><!-- .navbar-inner -->