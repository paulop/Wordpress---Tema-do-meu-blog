	<?php get_header(); ?>
	<main>
		<section id="conteudo">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row ms_align">
						<?php
							if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 							<div class="col-md-6">
								<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
								<p><small>Por <?php the_author_posts_link() ?> em <?php the_category( ', ' ); ?> | <strong>criado em</strong> <?php the_time("F, d \d\\e Y") ?> e <strong>atualizado em</strong> <?php the_modified_date("F, d \d\\e Y"); ?> | <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'btn btn-default btn-xs', 'Sem comentários'); ?></small></p>
								<?php the_content(); ?>
								<hr>
							</div>
							<?php $i++;?>
						<?php endwhile?>
						<?php else: ?>
						     <div class="col-md-12">
								<h3>Hum... Nenhum artigo encontrado...</h3>
								<p>Não encontrei nenhum artigo, vamos tentar novamente?</p>
							</div>
						<?php endif; ?>
							
						</div>
						<div class="col-md-12">
							<center>
								<?php
									vb_pagination();
								?>
							</center>
						</div>
					</div>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</section>
	</main>
	<?php get_footer(); ?>