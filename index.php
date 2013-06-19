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
	<?php tha_content_before(); ?>
	<section id="content" class="site-content offset1 span8" role="main">
		<?php 
			if ( is_404() ) :
				get_template_part( 'part/content' , '404' );
			else:
				get_template_part( 'part/loop' );
			endif;
		?>
	</section><!-- #content -->
	<?php tha_content_after(); ?>
	
	<?php get_sidebar(); ?>
</div><!-- #primary -->
	
<?php get_footer(); ?>
