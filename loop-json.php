<?php echo "Part One Works";

if ( is_404() ) :
  get_template_part( 'views/' . UC_RETURN_FORMAT . '/content' , '404' );
else:
        
  // The Loop
	if ( have_posts() ) :
		// Insert title for search & archive pages
		if ( is_search() || is_archive() ) : 
			get_template_part( 'views/' . UC_RETURN_FORMAT . '/header', 'page' );
		endif;
		
		// Set post format
		$postFormat = ( is_single() ? 'single' : ( is_page() ? 'page' : ( is_search() ? 'search' : get_post_format() ) ) );
		
		// Get post content
		while ( have_posts() ) : the_post();
			get_template_part( 'views/' . UC_RETURN_FORMAT . '/content', $postFormat );
		endwhile;
		
		// Get comments for single & page
		if ( is_single() || is_page() ) :
			if ( comments_open() || '0' != get_comments_number() ) :
        get_template_part( 'views/' . UC_RETURN_FORMAT . '/comments' ); 
			endif;
		endif;
		
		// Get Navs
		if ( ! is_page() ):
			uncorked_content_nav( 'nav-below' );
		endif;
		
	else :
		get_template_part( 'views/' . UC_RETURN_FORMAT . '/no-results', 'index' ); 
	endif; 

endif;