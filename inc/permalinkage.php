<?php 
/**
 * Function uncorked_permalink_data
 * 
 * Builds a javascript object variable out of the rewrite data that Wordpress is using.
 * Data to be used by client-side application for routing.
 *
 * @return void
 * @author Stephen Crockett
 * @package uncorked
 * @since 2.0a
 * 
 */

global $wp_rewrite;


function uncorked_permalink_data() {
    global $wp_rewrite;
    $my_string = "var permalinkStructure = { \n";
    $my_string .= "\tstructure: '" . $wp_rewrite->permalink_structure . "',\n";
    $my_string .= "\tauthorBase: '" . $wp_rewrite->author_base . "',\n";
    $my_string .= "\tsearchBase: '" . $wp_rewrite->search_base . "',\n";
    $my_string .= "\tpageBase: '" . $wp_rewrite->pagination_base . "',\n";
    $my_string .= "\tfront: '" . $wp_rewrite->front . "',\n";
    $my_string .= "\troot: '" . $wp_rewrite->root . "',\n";
    
    $my_string .= '}';
    file_put_contents(get_template_directory() . '/js/permalinks.js', $my_string );
    return $wp_rewrite;
}

// Calls to the function or to delete the file
if (!file_exists(get_template_directory() . '/js/permalinks.js')) {
  uncorked_permalink_data();
}
if( !$wp_rewrite->using_permalinks() || $wp_rewrite->permalink_structure === '' ) {
  if (file_exists(get_template_directory() . '/js/permalinks.js')) {
    unlink(get_template_directory() . '/js/permalinks.js');
  }
}
add_action('generate_rewrite_rules', 'uncorked_permalink_data');