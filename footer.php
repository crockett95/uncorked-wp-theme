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

	<footer id="colophon" class="site-footer row-fluid" role="contentinfo">
		<nav id="footer-nav" class="span8 offset2">
		  <?php wp_nav_menu( array('theme_location' => 'footer', 'container' => false, 'items_wrap' => '<ul id="%1$s" style class="inline lead %2$s">%3$s</ul>') ); ?>
		</nav>
		<div id="footer-widgets" class="row-fluid">
		<div class="span3"><?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('foot1') ) :
      endif; ?></div>
		<div class="span3"><?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('foot2') ) :
      endif; ?></div>
		<div class="span3"><?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('foot3') ) :
      endif; ?></div>
		<div class="span3"><?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('foot4') ) :
      endif; ?></div>
		</div>
		<div class="site-info">
			<?php do_action( 'uncorked_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'uncorked' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'uncorked' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'uncorked' ), 'Uncorked', '<a href="http://crockett.co" rel="designer">Steve Crockett</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

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
