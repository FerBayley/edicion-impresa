<?php
/*
Template Name: 2013
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
			<h2>PUBLICACIONES 2013</h2>
		</div> <!-- End of Titulo_tapa -->

		<section class="Tapas">
			<div class="Tapa1">						
				<?php include("includes/2013/enero.php"); ?>
				<?php include("includes/2013/mayo.php"); ?>				
				<?php include("includes/2013/septiembre.php"); ?>
			</div> <!-- end of Tapa1 -->

			<div class="Tapa2">					
				<?php include("includes/2013/febrero.php"); ?>
				<?php include("includes/2013/junio.php"); ?>
				<?php include("includes/2013/octubre.php"); ?>
			</div> <!-- end of Tapa2 -->

			<div class="Tapa3">
				<?php include("includes/2013/marzo.php"); ?>
				<?php include("includes/2013/julio.php"); ?>
				<?php include("includes/2013/noviembre.php"); ?>
			</div> <!-- end of Tapa3 -->

			<div class="Tapa4">
				<?php include("includes/2013/abril.php"); ?>
				<?php include("includes/2013/agosto.php"); ?>
				<?php include("includes/2013/diciembre.php"); ?>
			</div> <!-- end of Tapa4 -->
		</section> <!-- End of Tapas -->

<?php get_footer(); ?>