<?php tha_content_top(); ?>
	<?php // The Loop
		if ( have_posts() ) :
			// Insert title for search & archive pages
			if ( is_search() || is_archive() ) : 
				get_template_part( 'part/header', 'page' );
			endif;
			
			// Set post format
			$post_format = is_single() ? 'single' : is_page() ? 'page' : is_search() ? 'search' : get_post_format();
			
			// Get post content
			while ( have_posts() ) : the_post();
				get_template_part( 'part/content', $post_format );
			endwhile;
			
			// Get comments for single & page
			if ( is_single() || is_page() ) :
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			endif;
			
			// Get Navs
			if ( ! is_page() ):
				uncorked_content_nav( 'nav-below' );
			endif;
			
		else :
			get_template_part( 'part/no-results', 'index' ); 
		endif; 
	?>
<?php tha_content_bottom(); ?>