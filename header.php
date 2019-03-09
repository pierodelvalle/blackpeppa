<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Place this data between the <head> tags of your website -->
	<title>Black Peppa</title>
	<meta name="description" content="Como agencia de comunicaciones hacemos contenidos y piezas audiovisuales a través de historias para medios digitales y otros." />
	<!-- Twitter Card data -->
	<meta name="twitter:card" value="Como agencia de comunicaciones hacemos contenidos y piezas audiovisuales a través de historias para medios digitales y otros.">
	<!-- Open Graph data -->
	<meta property="og:title" content="Black Peppa" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="http://www.blackpeppa.pe/" />
	<meta property="og:image" content="<?php echo get_template_directory_uri();?>/img/bp_featured.png" />
	<meta property="og:description" content="Como agencia de comunicaciones hacemos contenidos y piezas audiovisuales a través de historias para medios digitales y otros." />
	<meta name="theme-color" content="#F2E44C">
	<!-- Make-responsive tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/favicon-16x16.png" sizes="16x16" />
	<?php wp_head();?>
</head>
<body>
	<div class="loader">
		<img src="<?php echo get_template_directory_uri();?>/img/loader.svg" alt="">
	</div>
	<header class="header">	
		<div class="container">
			<div class="container-wrapper">
				<a class="header-img full" href="/#inicio"><img height="64" width="250" src="<?php echo get_template_directory_uri(); ?>/img/blackpeppa_logo_N.svg" alt="Black Peppa"></a>
				<a id="menu-toggle" href="#"><div></div><div></div><div></div></a>
				<nav class="nav">
					<ul>
						<?php wp_nav_menu() ?>
					</ul>
				</nav>
				<div class="yellowbar"></div>
			</div>
		</div>
	</header> 