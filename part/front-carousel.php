<?php
	function uncorked_carousel($tag, $count) {
		$carouselArgs = array(
			'tag' => $tag,
			'posts_per_page' => $count                
		);
		$carouselCounter = 0;
		// The Query
		query_posts( $carouselArgs );

		// The Loop
		if( have_posts() ) {		
		// The Indicators
		echo '<div id="myCarousel" class="carousel slide center-block"><ol class="carousel-indicators">';
		for ($i = 1; $i <= $count; $i++) {
			$indicatorClass = ( $i == 1 ? '" class="active"' : '"' );
		    $slide = $i - 1;
			echo  '<li data-target="#myCarousel" data-slide-to="' . $slide . $indicatorClass . '></li>';
		}
		echo '</ol><div class="carousel-inner"  style="width: 100%">';


    		while ( have_posts() ) : the_post();
    			echo '<div class="item carousel-post';
    			if ($carouselCounter == 0){
    				echo ' active';
    				$carouselCounter = 1;
    			}
    			echo '" style="width:100%; height:100%;">';
    			if ( has_post_thumbnail() ) { the_post_thumbnail( 'carousel-thumb' ); } else { echo '<img src="' . get_template_directory_uri() . '/img/filler.png" alt="filler graphic" />';}
    			echo '<a href="';
    			the_permalink();
    			echo '" title="' . esc_attr( sprintf( __( 'Permalink to %s', 'uncorked' ), the_title_attribute( 'echo=0' ) ) ); 
    			echo '" rel="bookmark"><div class="carousel-caption">';
    			echo '<h2>';
    			the_title();
    			echo '</h2>';
    			the_excerpt();
    			echo '</div></a></div>';
    		endwhile;
    	
    		echo '</div><a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="icon-chevron-left"></i></a><a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="icon-chevron-right"></i></a><script>var $ = jQuery.noConflict();$(document).ready(function() {$(\'.carousel\').carousel(\'cycle\',{interval: 2000;});});</script></div>';
		}
		// Reset Query
		wp_reset_query();
	}
    uncorked_carousel('featured', 5);
