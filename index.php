<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Uncorked
 */

get_header(); ?>

	<div id="primary" class="content-area row-fluid">
		<section id="content" class="site-content offset1 span8" role="main">
			<?php // The Loop
				if ( have_posts() ) : 
					while ( have_posts() ) : the_post(); 
						get_template_part( 'part/content', get_post_format() );
					endwhile; 
					uncorked_content_nav( 'nav-below' );
				else :
					get_template_part( 'no-results', 'index' ); 
				endif; 
			?>
		</section><!-- #content -->
		
		<section class="span3 hidden-phone">
			<?php get_sidebar(); ?>
		</section>
	</div><!-- #primary -->
	
<?php get_footer(); ?>
