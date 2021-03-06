<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Uncorked
 */
?>

<?php tha_sidebars_before(); ?>
<section id="secondary" class="widget-area span3 hidden-phone" role="complementary">
	<?php tha_sidebar_top(); ?>
	<?php do_action( 'before_sidebar' ); ?>
	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

		<aside id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</aside>

		<aside id="archives" class="widget">
			<h1 class="widget-title"><?php _e( 'Archives', 'uncorked' ); ?></h1>
			<ul>
				<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
			</ul>
		</aside>

		<aside id="meta" class="widget">
			<h1 class="widget-title"><?php _e( 'Meta', 'uncorked' ); ?></h1>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</aside>

	<?php endif; // end sidebar widget area ?>
	<?php tha_sidebar_bottom(); ?>	
</section><!-- #secondary -->
<?php tha_sidebars_after(); ?>
