<section class="Tapa_delMes">
	<div class="Contenedor_tapa">
		<div class="col_tapa1">
			<?php query_posts("category_name=Tapa-destaque"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<div class="Thumb">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'tapa_thumbs' ); } ?>
				</div><!-- End of Thumb -->

				<?php endwhile; else: ?>
					<p>Tapa principal del mes.</p>
						<?php endif; ?>
		</div> <!-- End of col_tapa1 -->

		<div class="col_tapa2">
			<article>
				<p>
					<q>
						Bienvenidos a la descarga en formato digital del Periódico convivir Ahora usted 
						puede leer la edición del mes en cualquier momento, en todas partes disponible 
						en su casa o en el trabajo para descargar en formato PDF o leerlo on line. Las 
						presentes son la misma edición que el periódico impreso en Buenos Aires, Argentina.
					</q>
				</p>
			</article>

			<article>
				<?php query_posts("category_name=Texto-destaque"); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<h2><?php the_title();?></h2>

					<p><?php the_content();?></p>
						<?php endwhile; else: ?>
							<p>No se encontraron tapas en esta sección.</p>
								<?php endif; ?>
			</article>
				</div> <!-- End of col_tapa2 -->
			</div> <!-- End of Contenedor_tapa -->
		</section> <!-- End of Tapa_delMes -->