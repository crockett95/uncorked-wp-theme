<?php
/**
 * Uncorked Index - The main controller for the Uncorked Theme
 * 
 * This is the default file called by Wordpress for the display of
 * pages, posts, and other views. This file has been concern-separated
 * from nearly all view code, which is accessible in the `./views`
 * directory.
 * 
 * @package     Uncorked
 * @author      Steve Crockett
 * @category    Controller
 * @copyright   2013-2013 Steve Crockett
 * @license     GNU General Public License, version 2
 * @version     1.0.0
 * 
 * @since       1.0.0
 */

// Insert Header View
get_template_part('views/header'); 

     tha_content_before();
     echo '<main id="content">'; 
     
     // Call The Loop
     if ( is_404() ) :
         get_template_part( 'views/content' , '404' );
     else:
         get_template_part( 'loop' );
     endif;
     
     echo '</main><!-- #content -->';
     tha_content_after();
     
     // Add a sidebar
     get_template_part('views/sidebar'); 

// Insert Footer View
get_template_part('views/footer'); 

/*  End of File */
/*  Location {uncorked root directory}/ */
