<?php
/**
 * The fixed navbar for the template.
 *
 * @package Uncorked
 */

get_header(); ?>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
		<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
			<a href="#" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-reorder icon-large"></span>
			</a>

		<!-- Be sure to leave the brand out there if you want it shown -->
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="nav-title brand">
				<?php bloginfo( 'name' ); ?></a>
			<div class="screen-reader-text skip-link">
				<a href="#content" title="<?php esc_attr_e( 'Skip to content', 'uncorked' ); ?>">
				<?php _e( 'Skip to content', 'uncorked' ); ?></a>
			</div>

		<!-- Everything you want hidden at 940px or less, place within here -->
			<div class="nav-collapse collapse">
				<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'items_wrap' => '<ul id="%1$s" class="nav %2$s">%3$s</ul>') ); ?>
			</div>
		</div>
	</div>
</div>