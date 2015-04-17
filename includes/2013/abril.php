<section class="Emboltorio">
	<?php query_posts("category_name=2013col-abril"); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="Thumb">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'tapas_thumbs' ); } ?>
					</div><!-- End of Thumb -->	
						<h2><?php the_title();?></h2>

						<p><?php the_content();?></p>
							<?php endwhile; else: ?>
								<p>No se encontraron tapas en esta sección.</p>
									<?php endif; ?>
</section> <!-- End of Emboltorio -->