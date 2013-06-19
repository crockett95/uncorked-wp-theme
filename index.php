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

<main>
	<?php tha_content_before(); ?>
	<section>
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
</main><!-- #primary -->
	
<?php get_footer(); ?>
