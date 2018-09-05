<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	
	<!-- Google Tag Manager -->
	<script>var dataLayer = [];</script>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-K5S38ZM');</script>
	<!-- End Google Tag Manager -->
	
	<title><?php wp_title(''); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" />

	<?php wp_enqueue_style('styles',get_bloginfo('template_directory').'/style.css',array(),'1.0'); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5S38ZM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header>
	<div class="container">
		<a class="logo" href="<?php bloginfo('url'); ?>">Omax Cognitive Boost</a>
		<nav class="menu">
			<svg class="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32">
				<path d="M2.5 9.25h27c1.242 0 2.25-1.008 2.25-2.25s-1.008-2.25-2.25-2.25h-27C1.258 4.75.25 5.758.25 7S1.258 9.25 2.5 9.25zm27 4.5h-27C1.258 13.75.25 14.758.25 16s1.008 2.25 2.25 2.25h27c1.242 0 2.25-1.008 2.25-2.25s-1.008-2.25-2.25-2.25zm0 9h-27C1.258 22.75.25 23.758.25 25s1.008 2.25 2.25 2.25h27c1.242 0 2.25-1.008 2.25-2.25s-1.008-2.25-2.25-2.25z"/>
			</svg>
			<div class="pages">
				<a href="<?php bloginfo('url'); ?>/how-it-works/">How it Works</a>
				<a href="<?php bloginfo('url'); ?>/real-user-stories/">Real User Stories</a>
			</div>
		</nav>
		<nav class="global">
			<a href="tel:1-855-291-6741">Click to Call</a>
		</nav>
		<div class="offer">
			<p>First Box $19.95 + FREE SHIPPING*</p>
		</div>
	</div>
</header>
