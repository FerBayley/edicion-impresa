<?php
/*
Template Name: 2012
*/
?>

<?php get_header(); ?>

<body>		
		<nav>
			<section class="Contenedor_menu">
				<?php wp_nav_menu(
					array(
					'container' => false,
					'items_wrap' => '<ul id="menu-top">%3$s</ul>',
					'theme_location' => 'menu'
				)); ?>
			</section> <!-- End of Contenedor_menu -->
		</nav> <!-- End of nav -->

		<header>
			<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Logo convivir Press edicion impresa">
		</header> <!-- End of header -->

		<div class="Titulo_tapa">
			<h2>PUBLICACIONES 2012</h2>
		</div> <!-- End of Titulo_tapa -->

		<section class="Tapas">
			<div class="Tapa1">										
				<?php include("includes/2012/septiembre.php"); ?>
			</div> <!-- end of Tapa1 -->

			<div class="Tapa2">					
				<?php include("includes/2012/octubre.php"); ?>
			</div> <!-- end of Tapa2 -->

			<div class="Tapa3">
				<?php include("includes/2012/noviembre.php"); ?>
			</div> <!-- end of Tapa3 -->
		</section> <!-- End of Tapas -->

<?php get_footer(); ?>