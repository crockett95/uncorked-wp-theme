<?php
/**
 * The template for displaying search forms
 *
 * @package     Uncorked
 * @category    View
 * @since       1.0.0
 */
?>
<form method="get" id="searchform" class="searchform form-search" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<label for="s" class="screen-reader-text"><?php _ex( 'Search', 'assistive text', 'uncorked' ); ?></label>
	<input type="search" class="field search-query span12" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php echo esc_attr_x( 'Search&hellip;', 'placeholder', 'uncorked' ); ?>" />
	<button type="submit" class="btn btn-primary hidden" value="<?php echo esc_attr_x( 'Search', 'submit button', 'uncorked' ); ?>"><i class="icon-search"></i></button>
</form>
