<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="author" content="Diovan Decol - Agência Polvo">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="all" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="icon" href="<?php echo esc_url( home_url( '/' ) ); ?>favicon.png" type="image/x-icon"/>
	<?php wp_head(); ?>
</head>

<body> 
	
	<header id="header">

		<!-- Top Header -->
		<div id="topHeader">

			<div class="container">

				<!-- Redes Sociais -->
				<div class="redesSociais">
				
					<!-- Facebook -->
					<?php if (get_field('facebook', 7)) { ?>
						<a href="<?= get_field('facebook', 7) ?>">
							<i class="fa fa-facebook"></i>
						</a>
					<?php } ?>

					<!-- Instagram -->
					<?php if (get_field('instagram', 7)) { ?>
						<a href="<?= get_field('instagram', 7) ?>">
							<i class="fa fa-instagram"></i>
						</a>
					<?php } ?>

					<!-- Linkedin -->
					<?php if (get_field('linkedin', 7)) { ?>
						<a href="<?= get_field('linkedin', 7) ?>">
							<i class="fa fa-linkedin-square"></i>
						</a>
					<?php } ?>

				</div>

				<!-- Menu mobile -->
				<div id="menuMobile">
					<i class="fa fa-bars"></i>
				</div>

			</div>

		</div>

		<!-- BoxMenu -->
		<div class="boxMenu">
			<div class="container">
				<img id="fechaMenuMobile" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/05/fecha-menu.png" alt="Fecha Menu">
				<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
			</div>
		</div>
			
	</header>