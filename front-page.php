<?php
/**
 * The front page template file.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Uncorked
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
		<?php 
		
		// Get the Carousel ?>
		<section id="uncorkedCarousel" class="site-content" role="main">
			<?php get_template_part( 'part/front', 'carousel' ); ?>
		</section><!-- #uncorkedCarousel -->
		
		<?php 
		
		// Get the Front-Page Widgets ?>
		<?php get_sidebar( 'front' ); ?>
		
		<?php 
		
		// Get the Content ?>
		<div id="postRow" class="row-fluid">
			<?php tha_content_before(); ?>
			<section id="postContent" class="site-content span10 offset1" role="main">
				<?php get_template_part( 'part/loop' )?>
			</section><!-- #postContent -->
			<?php tha_content_after(); ?>
		</div><!-- #postRow -->
		
	</div><!-- #primary -->

<?php get_footer(); ?>