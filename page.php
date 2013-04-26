<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Uncorked
 */

get_header(); ?>


<div id="primary" class="content-area row-fluid">
	<section id="content" class="site-content offset1 span8" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'part/content', 'page' ); ?>
				
				
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>
			</section><!-- #content -->

			<section class="span3 hidden-phone">
				<?php get_sidebar(); ?>
			</section>
		</div><!-- #primary -->
<?php get_footer(); ?>
