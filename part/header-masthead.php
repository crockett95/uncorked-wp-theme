<?php
/**
 * The masthead for the template.
 *
 * @package Uncorked
 */

 ?>

<header id="masthead" class="site-header container-fluid" role="banner">
	<?php tha_header_top(); ?>
	    <img src="<?php echo get_template_directory_uri(); ?>/img/olh-logo-square.png" alt="Operation Liberty Hill Logo" class="logo hidden-phone" />
		<hgroup class="pull-left">
		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?>
			</a>
		</h1>
		<h2 class="site-description"><?php is_front_page() ? bloginfo('description') : wp_title(''); ?></h2>
		</hgroup>
		<a href="#" id="donate-btn" class="btn btn-danger btn-large pull-right hidden-phone" target="_blank"><h2><i class="icon-paypal"></i> Donate!</h2></a>
	<?php tha_header_bottom(); ?>
</header><!-- #masthead -->