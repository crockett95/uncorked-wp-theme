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
		<section id="uncorkedCarousel" class="site-content" role="main">
			<?php get_template_part( 'part/front', 'carousel' ); ?>
		</section><!-- #uncorkedCarousel -->
		<?php get_sidebar( 'front' ); ?>
		<div id="postRow" class="row-fluid">
			<section id="postContent" class="site-content span10 offset1" role="main">
				<?php // The Loop
					if ( have_posts() ) : 
						while ( have_posts() ) : the_post(); 
							get_template_part( 'part/content', get_post_format() );
						endwhile; 
						uncorked_content_nav( 'nav-below' );
					endif; 
				?>
			</section><!-- #postContent -->
		</div><!-- #postRow -->
	</div><!-- #primary -->

<?php get_footer(); ?>