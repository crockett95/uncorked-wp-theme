<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Uncorked
 */
?>
    
        </section><!-- #body -->
		<?php tha_footer_before(); ?>
		<footer>
		<?php 
			tha_footer_top();
			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'container'       => 'nav',
				'items_wrap'      => '%3$s',
				'depth'           => 1 ) ); 
			get_sidebar( 'footer' ); ?>
			<div>
				<?php do_action( 'uncorked_credits' ); ?>
				<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'uncorked' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'uncorked' ), '<span>Wordpress</span>' ); ?></a>
				<span class="separator"> | </span>
				<?php printf( __( 'Design by %2$s.', 'uncorked' ), 'Uncorked', '<a href="http://crockett.co" rel="designer">Steve Crockett</a>' ); ?>
			</div><!-- .site-info -->
			<?php tha_footer_bottom(); ?>
		</footer><!-- #colophon -->
		<?php tha_footer_after(); ?>
		<?php tha_body_bottom(); ?>
		<?php wp_footer(); ?>
	</body>
</html>
