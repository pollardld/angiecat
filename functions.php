<?php

//---- Register Sidebars ----//

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'id' => 'homepg-sidebar',
		'name' => 'Home Page Sidebar',
		'before_widget' => '<div id="%1$s" class="sb-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
	register_sidebar(array(
		'id' => 'interiorpg-sidebar',
		'name' => 'Interior Page Sidebar',
		'before_widget' => '<div id="%1$s" class="sb-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
}

//---- Thumbnail Support ----//

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, true ); // Square post thumbnail
	add_image_size('featured-img', 636, 400, true ); // Featured image
}

//---- Register Navs ----//

function register_my_menus() {
	register_nav_menus(
		array(
       		'primary' => __( 'Main Menu' ),
      		'secondary' => __( 'Secondary Menu' )
    	)
  	);
}
add_action( 'init', 'register_my_menus' );

//---- Excerpt Length ----//

add_filter( 'excerpt_length', 'change_excerpt_length' );
function change_excerpt_length($length) {
    return 120; 
}

//---- Read More Link ----//

function new_excerpt_more($more) {
	global $post;
	return '&hellip; <a href='.get_permalink($post->ID).' class="read-more-link"> Read More</a>'; 
}

add_filter('excerpt_more', 'new_excerpt_more');

//---- Enqueue Scripts ----//

add_action( 'wp_enqueue_scripts', 'child_add_scripts' );

function child_add_scripts() {
	
	wp_register_script(
        'main',
        get_stylesheet_directory_uri() . '/js/main.js',
        array( 'jquery' ),
        '1.0',
        true
    );

    wp_enqueue_script( 'main' );
}

//---- Google Analytics Code ----//

add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics() { ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46746815-1', 'angiecat.com');
  ga('send', 'pageview');

</script>

<?php } ?>