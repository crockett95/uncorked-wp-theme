<?php
/**
 * The masthead for the template.
 *
 * @package Uncorked
 */

 ?>

<header id="masthead" class="site-header" role="banner">
	<?php tha_header_top(); ?>
	<hgroup class="hero-unit">
		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?>
			</a>
		</h1>
		<p class="site-description"><?php is_front_page() ? bloginfo('description') : wp_title(''); ?></p>
	</hgroup>
	<?php tha_header_bottom(); ?>
</header><!-- #masthead -->