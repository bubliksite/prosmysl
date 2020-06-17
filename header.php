<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="keywords" content=""/>
	<meta name="description" content=""/>

	<meta property="og:title" content="Создаем контент для продвижения В2В-компаний в интернете">
	<meta property="og:description" content="Cоздаем все материалы для рекламных кампаний В2В-сектора или сложных продуктов в интернете: от объявлений для контекста до больших текстов в блоги и СМИ">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/main-image.png">

	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icon.png">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Russo+One&display=swap" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<meta charset="UTF-8"/>

 	<title><?php bloginfo('name'); wp_title(); ?></title>

 	<?php wp_head(); ?>
</head>
<body>
	
	<header>
		<div id="header-menu" class="fixed-top">
			<section id="mobile-menu" class="shadow">
				<img id="close-mobile-menu"	src="<?php echo get_template_directory_uri(); ?>/img/icon-close-mobile-menu.svg" alt="">
				<?php 
					wp_nav_menu( array(
						'theme_location'=>'menu',
						'container' => false,
						'menu_class' => 'text-uppercase text-decoration-none text-body list-unstyled'
					) );
				?>
			</section>
			<nav class="container navbar navbar-expand-lg navbar-light py-3">
				<a class="navbar-brand" href="/">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-p.svg" alt="" style="width: 210px;">
				</a>
				<div class="collapse navbar-collapse d-flex justify-content-end" style="font-size: .9rem" id="navbarSupportedContent">
					<?php 
					wp_nav_menu( array(
						'theme_location'=>'menu',
						'container' => false,
						'menu_class' => 'nav text-uppercase text-decoration-none text-body'
					) );
					?>
				</div>
				<div id="mobile-menu-button" class="mobile-sm">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icon-mobile-menu.svg" alt="">
				</div>
			</nav>
		</div>
	</header>
	