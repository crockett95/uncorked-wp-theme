<?php
/**
 * The fixed navbar for the template.
 *
 * @package Uncorked
 */
?>

<nav class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a href="#" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<i class="icon-reorder"></i>
			</a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="nav-title brand">
				<?php bloginfo( 'name' ); ?></a>
			<div class="screen-reader-text skip-link">
				<a href="#content" title="<?php esc_attr_e( 'Skip to content', 'uncorked' ); ?>">
				<?php _e( 'Skip to content', 'uncorked' ); ?></a>
			</div>
			<div class="nav-collapse">
				<?php wp_nav_menu( array('theme_location' => 'primary', 'menu_class' => 'nav', 'depth' => 1, 'fallback_cb' => false, 'container' => false, 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>') ); ?>
			</div>
		</div><!-- .container-fluid -->
	</div><!-- .navbar-inner -->
</nav>