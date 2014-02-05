<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/../twentyfourteen-child/img/favicon.ico"/>

	<link href='http://fonts.googleapis.com/css?family=Ovo|Grand+Hotel|Montserrat:400,700' rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

	<div class="border-top"></div>
	<div class="border-middle"></div>
	<div class="border-bottom"></div>

	<main>
		<div class="span12">
			<header>
				<input class="nav-check" type="checkbox" name="nav-check">
				<label class="nav-check-label" for="nav-check"></label>

				<div class="logo">
					<a href="<?php bloginfo( 'url' ); ?>">
						<?php include( get_stylesheet_directory() . '/img/logo.svg' ); ?>
					</a>
				</div>

				<nav class="links" role="site-nav">
					<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container' => 'none', 'menu_class' => 'secondary-nav' ) ); ?>
				</nav>

				<nav class="social" role="social">
					<a href="http://www.pinterest.com/andreazimm/"><i alt="f210" class="genericon genericon-pinterest-alt"></i></a>
					<a href="https://twitter.com/angiecat86"><i alt="f202" class="genericon genericon-twitter"></i></a>
					<a href="http://www.pinterest.com/andreazimm/"><i alt="f204" class="genericon genericon-facebook-alt"></i></a>
					<a href="http://instagram.com/angiecat86"><i alt="f215" class="genericon genericon-instagram"></i></a>
					<a href="/feed/"><i alt="f413" class="genericon genericon-feed"></i></a>
				</nav>

				<nav>
					<?php get_search_form(); ?>
				</nav>

				<div class="sub-head">
					<h1>A little bit of kitty and a whole lot of city</h1>
				</div>

				<nav class="mainnav">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'none', 'menu_class' => 'nav-list' ) ); ?>
				</nav>
			</header>