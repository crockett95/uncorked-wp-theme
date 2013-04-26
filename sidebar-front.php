<div id="widgets" class="row-fluid">
	<div class="span4 well well-large"><?php
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('front1') ) :
	endif; ?></div>
	<div class="span4 well well-large"><?php
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('front2') ) :
	endif; ?></div>
	<div class="span4 well well-large"><?php
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('front3') ) :
	endif; ?></div>
</div>