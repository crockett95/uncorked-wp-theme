<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Uncorked
 */
?>
			</div><!-- #main -->
		</div><!-- #page -->

		<?php tha_footer_before(); ?>
		<footer id="colophon" class="site-footer row-fluid" role="contentinfo">
		<?php 
			tha_footer_top();
			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'container'       => 'nav',
				'container_id'    => 'footer-nav',
				'fallback_cb'	  => false,
				'container_class' => 'menu',
				'menu_class'      => '',
				'depth'           => 1 ) ); 
			get_sidebar( 'footer' ); ?>
			<div class="site-info" style="text-align: center;">
				<?php do_action( 'uncorked_credits' ); ?>
				<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'uncorked' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'uncorked' ), '<i class="icon-wordpress"></i><span class="hidden">Wordpress</span>' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Design by %2$s.', 'uncorked' ), 'Uncorked', '<a href="http://crockett.co" rel="designer">Steve Crockett</a> <span rel="copyright">&copy; 2013</span>' ); ?>
			</div><!-- .site-info -->
			<?php tha_footer_bottom(); ?>
		</footer><!-- #colophon -->
		<?php tha_footer_after(); ?>
		<?php tha_body_bottom(); ?>
		<?php wp_footer(); ?>
		<script>
			var $ = jQuery.noConflict();
			$(document).ready(function() {
				$('input[type="submit"]').addClass('btn btn-primary')
			});
		</script>
	</body>
</html>
