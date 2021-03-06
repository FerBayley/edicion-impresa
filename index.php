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

		<?php include("includes/tapa-mes.php"); ?>

		<div class="Titulo_tapa">
			<h2>PUBLICACIONES 2015</h2>
		</div> <!-- End of Titulo_tapa -->

		<section class="Tapas">
			<div class="Tapa1">						
				<?php include("includes/enero.php"); ?>
				<?php include("includes/mayo.php"); ?>				
				<?php include("includes/septiembre.php"); ?>
			</div> <!-- end of Tapa1 -->

			<div class="Tapa2">					
				<?php include("includes/febrero.php"); ?>
				<?php include("includes/junio.php"); ?>
				<?php include("includes/octubre.php"); ?>
			</div> <!-- end of Tapa2 -->

			<div class="Tapa3">
				<?php include("includes/marzo.php"); ?>
				<?php include("includes/julio.php"); ?>
				<?php include("includes/noviembre.php"); ?>
			</div> <!-- end of Tapa3 -->

			<div class="Tapa4">
				<?php include("includes/abril.php"); ?>
				<?php include("includes/agosto.php"); ?>
				<?php include("includes/diciembre.php"); ?>
			</div> <!-- end of Tapa4 -->
		</section> <!-- End of Tapas -->

<?php get_footer(); ?>