<?php get_header(); ?>

<main>
	<section id="conteudo">
		<div class="container">
			<div class="row">
				<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="col-md-9">
						<p><small>Por <?php the_author_posts_link() ?> em <?php the_category( ', ' ); ?> | <strong>criado em</strong> <?php the_time("F, d \d\\e Y") ?> e <strong>atualizado em</strong> <?php the_modified_date("F, d \d\\e Y"); ?> | <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'btn btn-default btn-xs', 'Sem comentários'); ?></small></p>
						<?php the_content(); ?>
						<hr>
						<?php
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}
						?>
					</div>
					<?php $i++;?>
				<?php endwhile?>
				<?php else: ?>
				     <div class="col-md-9">
						<h3>Hum... Nenhum artigo encontrado...</h3>
						<p>Não encontrei nenhum artigo, vamos tentar novamente?</p>
					</div>
				<?php endif; ?>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>