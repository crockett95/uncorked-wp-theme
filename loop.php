<?php 
/**
 * The Loop - The Core of Wordpress
 * 
 * This is the call of the loop, which can be included in
 * any part of the theme using `get_template_part('loop')`.
 * It makes a call to `./views' for the correct content view
 * based on the view type.
 * 
 * @package     Uncorked
 * @category    Controller
 * @since       1.0.0
 */
    
    
    tha_content_top(); 
        
    // The Loop
	if ( have_posts() ) :
		// Insert title for search & archive pages
		if ( is_search() || is_archive() ) : 
			get_template_part( 'views/header', 'page' );
		endif;
		
		// Set post format
		$postFormat = ( is_single() ? 'single' : ( is_page() ? 'page' : ( is_search() ? 'search' : get_post_format() ) ) );
		
		// Get post content
		while ( have_posts() ) : the_post();
			get_template_part( 'views/content', $postFormat );
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
		get_template_part( 'views/no-results', 'index' ); 
	endif; 
    tha_content_bottom();
    
/* End of File */
/* Location {uncorked root directory}/ */