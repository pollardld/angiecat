<aside class="span4">

	<?php if ( is_front_page() ) {
	
		dynamic_sidebar('homepg-sidebar');
		
	} else {
	
		dynamic_sidebar('interiorpg-sidebar');
		
	} ?>
		
</aside>