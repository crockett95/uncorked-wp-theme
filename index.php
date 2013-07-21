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

//  Check the requested format and set to a constant
if ($_GET['format'] === 'json') {
  define('UC_RETURN_FORMAT', 'json');
  // Call the JSON Controller
} elseif ($_GET['format'] === 'xml') {
  define('UC_RETURN_FORMAT', 'xml');
  // Call to XML Controller
} else { //Render HTML
  define('UC_RETURN_FORMAT', 'html');
}


// Insert Header View
get_template_part('views/' . UC_RETURN_FORMAT . '/header'); 

    // Add a touch of code for HTML
    //  I hate having this in my index.php, but I haven't figured out how to get around it.
    if ( UC_RETURN_FORMAT === 'html' ) {
      tha_content_before();
      echo '<main id="content">'; 
    }
   
     // Call The Loop
     get_template_part( 'loop' );
   
     // Add a sidebar
     if ( UC_RETURN_FORMAT === 'html' ) {
      tha_content_after();
       get_template_part('views/' . UC_RETURN_FORMAT . '/sidebar');
      echo '</main><!-- #content -->';
     }

// Insert Footer View
get_template_part('views/' . UC_RETURN_FORMAT . '/footer'); 


/*  End of File */
/*  Location {uncorked root directory}/ */
