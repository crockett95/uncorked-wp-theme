<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Uncorked
 */


if ( ! function_exists( 'uncorked_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function uncorked_content_nav( $nav_id ) {
	global $wp_query, $post;

	// Don't print empty markup on single pages if there's nowhere to navigate.
	if ( is_single() ) {
		$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
		$next = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous )
			return;
	}

	// Don't print empty markup in archives if there's only one page.
	if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() ) )
		return;

	$nav_class = ( is_single() ) ? 'navigation-post' : 'navigation-paging';

	?>
	<nav role="navigation" id="<?php echo esc_attr( $nav_id ); ?>" class="<?php echo $nav_class; ?>">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'uncorked' ); ?></h1>
		<ul class="pager">
	<?php if ( is_single() ) : // navigation links for single posts ?>

		<?php previous_post_link( '<li class="nav-previous">%link</li>', '<span class="meta-nav icon-chevron-left"></span> %title' ); ?>
		<?php next_post_link( '<li class="nav-next">%link</li>', '%title <span class="meta-nav icon-chevron-right"></span>' ); ?>

	<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>

		<?php if ( get_next_posts_link() ) : ?>
		<li class="nav-previous pager"><?php next_posts_link( __( '<span class="meta-nav icon-chevron-left"></span> Older posts', 'uncorked' ) ); ?></li>
		<?php endif; ?>

		<?php if ( get_previous_posts_link() ) : ?>
		<li class="nav-next pager"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav icon-chevron-right"></span>', 'uncorked' ) ); ?></li>
		<?php endif; ?>

	<?php endif; ?>
		
		</ul>
	</nav><!-- #<?php echo esc_html( $nav_id ); ?> -->
	<?php
}
endif; // uncorked_content_nav



if ( ! function_exists( 'uncorked_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
function uncorked_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'uncorked' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'uncorked' ), '<span class="edit-link">', '<span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer class="thumbnail">
				<div class="comment-author vcard">
					<?php echo get_avatar( $comment, 40 ); ?>
					<?php printf( __( '%s <span class="says">says:</span>', 'uncorked' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
				</div><!-- .comment-author .vcard -->


				<div class="comment-meta commentmetadata">
					<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time datetime="<?php comment_time( 'c' ); ?>">
					<?php printf( _x( '%1$s at %2$s', '1: date, 2: time', 'uncorked' ), get_comment_date(), get_comment_time() ); ?>
					</time></a>
					<?php edit_comment_link( __( 'Edit', 'uncorked' ), '<span class="edit-link">', '<span>' ); ?>
				</div><!-- .comment-meta .commentmetadata -->
			</footer>
			
				<?php if ( $comment->comment_approved == '0' ) : ?>
					<br />
					<div class="alert alert-info mod-alert">
					<button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
					<?php _e( '<i class="icon-info-sign icon-large"></i> Your comment is awaiting moderation.', 'uncorked' ); ?>
					</div>
				<?php endif; ?>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply label">
				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for uncorked_comment()

if ( ! function_exists( 'uncorked_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function uncorked_posted_on() {
	printf( __( 'Posted on <a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a><span class="byline"> by <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'uncorked' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'uncorked' ), get_the_author() ) ),
		get_the_author()
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category
 */
function uncorked_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'all_the_cool_cats' ) ) ) {
		// Create an array of all the categories that are attached to posts
		$all_the_cool_cats = get_categories( array(
			'hide_empty' => 1,
		) );

		// Count the number of categories that are attached to the posts
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'all_the_cool_cats', $all_the_cool_cats );
	}

	if ( '1' != $all_the_cool_cats ) {
		// This blog has more than 1 category so uncorked_categorized_blog should return true
		return true;
	} else {
		// This blog has only 1 category so uncorked_categorized_blog should return false
		return false;
	}
}

/**
 * Flush out the transients used in uncorked_categorized_blog
 */
function uncorked_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'all_the_cool_cats' );
}
add_action( 'edit_category', 'uncorked_category_transient_flusher' );
add_action( 'save_post', 'uncorked_category_transient_flusher' );