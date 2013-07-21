<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Uncorked
 */
?>

<?php tha_sidebars_before(); ?>
<aside>
	<?php tha_sidebar_top(); ?>
	<?php do_action( 'before_sidebar' ); ?>
	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

		<article>
			<?php get_search_form(); ?>
		</article>

		<article>
			<h1><?php _e( 'Archives', 'uncorked' ); ?></h1>
			<ul>
				<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
			</ul>
		</article>

		<article>
			<h1><?php _e( 'Meta', 'uncorked' ); ?></h1>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</article>

	<?php endif; // end sidebar widget area ?>
	<?php tha_sidebar_bottom(); ?>	
</aside><!-- #secondary -->
<?php tha_sidebars_after(); ?>
