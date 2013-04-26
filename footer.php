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

			<?php tha_footer_before(); ?>
			<footer id="colophon" class="site-footer row-fluid" role="contentinfo">
			<?php tha_footer_top(); ?>
				<nav id="footer-nav">
				  <?php wp_nav_menu( array('theme_location' => 'footer', 'container' => false, 'items_wrap' => '<ul id="%1$s" style class="inline lead %2$s">%3$s</ul>') ); ?>
				</nav>
				<?php get_sidebar( 'footer' ); ?>
				<div class="site-info" style="text-align: center;">
					<?php do_action( 'uncorked_credits' ); ?>
					<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'uncorked' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'uncorked' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s.', 'uncorked' ), 'Uncorked', '<a href="http://crockett.co" rel="designer">Steve Crockett</a>' ); ?>
				</div><!-- .site-info -->
				<?php tha_footer_bottom(); ?>
			</footer><!-- #colophon -->
			<?php tha_footer_after(); ?>
		</div><!-- #page -->
		<?php tha_body_bottom(); ?>
		<?php wp_footer(); ?>

		<?php if(is_front_page()) { ?>
		<script>
			var $ = jQuery.noConflict();
			$(document).ready(function() {
				$('.carousel').carousel('cycle',{
		 			interval: 2000,
			 	});
			});
		</script>
		<?php } ?>
	</body>
</html>
