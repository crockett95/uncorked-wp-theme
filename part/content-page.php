<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Uncorked
 */
?>

<?php tha_entry_before(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php 
		tha_entry_top();
		if( ! is_front_page() ) :
	?>
	<header class="entry-header page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
	
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'uncorked' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'uncorked' ), '<footer class="entry-meta"><span class="edit-link label label-important">', '</span></footer>' ); ?>

	<?php tha_entry_bottom(); ?>
</article><!-- #post-## -->	
<?php tha_entry_after(); ?>
