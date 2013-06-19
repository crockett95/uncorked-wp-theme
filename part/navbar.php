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
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="nav-title brand">
			<?php bloginfo( 'name' ); ?>
		</a>
		<div class="nav-collapse">
			<?php wp_nav_menu( array(
				'theme_location' => 'primary', 
				'depth' => 3, 
				'container' => false, 
				) ); ?>
		</div>
	</div><!-- .container-fluid -->
</div><!-- .navbar-inner -->