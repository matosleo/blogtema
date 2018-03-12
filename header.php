<!DOCTYPE html>

<html>

<head <?php language_attributes(); ?>>
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if(is_singular() && pings_open(get_queried_object())): ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php endif; ?>
	
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

	<!-- Inicio Wordpress Header -->
	<?php wp_head(); ?>
	<!-- Fim Wordpress Header -->
</head>

<body>
	<header class="header">
		<h1 class="hide">Leitor Hipster</h1>
		<div class="logo">
			<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_blog_preto.png" alt="Logotipo do blog Leitor Hipster"></a>
		</div>
		<nav class="nav-menu">
			<!-- criar meu próprio icone -->
			<div class="menu-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/menu_icon_mobile.png">
			</div>
			<?php 
				wp_nav_menu(array(
					'theme_locations' => 'primary'
				));
			?>
		</nav>
	</header>