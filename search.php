<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Uncorked
 */

get_header(); ?>

<div id="primary" class="content-area row-fluid">
	<section id="content" class="site-content offset1 span8" role="main">
		<?php 
			if ( have_posts() ) : 
			?>
			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'uncorked' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->
			<?php /* Start the Loop */ 
				while ( have_posts() ) : the_post(); 
					get_template_part( 'part/content', 'search' ); 
				endwhile;
				uncorked_content_nav( 'nav-below' ); 
			else : 
				get_template_part( 'no-results', 'search' ); 
			endif; 
		?>		
	</section><!-- #content -->

	<section class="span3 hidden-phone">
		<?php get_sidebar(); ?>
	</section>
</div><!-- #primary -->

<?php get_footer(); ?>