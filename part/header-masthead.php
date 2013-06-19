<?php
/**
 * The masthead for the template.
 *
 * @package Uncorked
 */

 ?>

	<hgroup>
	<?php tha_header_top(); ?>
		<h1>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?>
			</a>
		</h1>
		<h2><small><?php is_front_page() ? bloginfo('description') : wp_title(''); ?></small></p>
	<?php tha_header_bottom(); ?>
	</hgroup>
