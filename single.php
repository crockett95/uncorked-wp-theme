<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Uncorked
 */

get_header(); ?>


<div id="primary" class="content-area row-fluid">
	<section id="content" class="site-content offset1 span8" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'part/content', 'single' ); ?>
			
			<div class="row-fluid">
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>
			</div>
			<?php uncorked_content_nav( 'nav-below' ); ?>

		<?php endwhile; // end of the loop. ?>
		</section><!-- #content -->
		
		<section class="span3 hidden-phone">
			<?php get_sidebar(); ?>
		</section>
	</div><!-- #primary -->
<?php get_footer(); ?>
