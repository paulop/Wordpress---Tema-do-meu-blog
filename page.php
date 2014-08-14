<?php get_header(); ?>

<main>
	<section id="conteudo">
		<div class="container">
			<div class="row">
				<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="col-md-9">
						<p><small>Por <?php the_author_posts_link() ?> | <?php the_time("F, d \d\\e Y") ?> </small></p>
						<?php the_content(); ?>
						<hr>
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