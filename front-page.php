<?php
/**
 * The front page template file.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Uncorked-Merlot
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
	<div id="myCarousel" class="carousel slide center-block">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner"  style="width: 100%">
                <?php
                $carouselArgs = array(
                  'tag' => 'featured',
                  'posts_per_page' => '3'                
                );
// The Query
query_posts( $carouselArgs );

// The Loop
while ( have_posts() ) : the_post();
                    echo '<div class="item';
                    if ($carouselCounter == 0){
                      echo ' active';
                      $carouselCounter = 1;
                    }
                    echo '" style="width:100%; height:100%;">';
                    if ( has_post_thumbnail() ) { the_post_thumbnail( 'carousel-thumb' ); } else { echo '<img src="' . get_template_directory_uri() . '/img/filler.png" alt="Jay Denton Logo" />';}
                    echo '<a href="';
                    the_permalink();
                    echo '" title="' . esc_attr( sprintf( __( 'Permalink to %s', 'uncorked_merlot' ), the_title_attribute( 'echo=0' ) ) ); 
                    echo '" rel="bookmark"><div class="carousel-caption">';
                    echo '<h2>';
                    the_title();
                    echo '</h2>';
                    the_excerpt();
                    echo '</div></a></div>';
endwhile;

// Reset Query
wp_reset_query();
?>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="icon-chevron-left icon-4x"></i></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="icon-chevron-right icon-4x"></i></a>
              </div>

		</div><!-- #content -->
<div id="widgets" class="row-fluid">
<div class="span4 well well-large"><?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('front1') ) :
      endif; ?></div>
      <div class="span4 well well-large"><?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('front2') ) :
      endif; ?></div>
      <div class="span4 well well-large"><?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('front3') ) :
      endif; ?></div></div>
	</div><!-- #primary -->

<?php get_footer(); ?>