	<footer id="footer">
		<div class="footer">
		  <div  class="container">
		  	<div class="row">
		  		<div class="col-md-3">
			  		<h4>Menu</h4>
			  		<small>
			  		<?php
						wp_nav_menu(array(
							'theme_location'=>'footer1',
							'container_class'=>'',
							'menu_class'=>'nav nav-pills nav-stacked',
						));
					?>
					</small>
				</div>
				<div class="col-md-3">
				<h4>Séries</h4>
			  		<small>
			  		<?php
						wp_nav_menu(array(
							'theme_location'=>'footer2',
							'container_class'=>'',
							'menu_class'=>'nav nav-pills nav-stacked',
						));
					?>
					</small></div>
				<!--<div class="col-md-3">Vazio</div>-->
				<div class="col-md-3">
					<h4>Contato</h4>
					<address><small>
	                    <strong>Erik Figueiredo</strong><br>
	                    <abbr title="" class="ttip" data-original-title="Email">E</abbr>: <a href="mailto:falecom@erikfigueiredo.com.br">falecom@erikfigueiredo.com.br</a><br>
	                    <abbr title="" class="ttip" data-original-title="Facebook">F</abbr>: <a href="https://www.facebook.com/erikfigueiredods">facebook.com/erikfigueiredods</a><br>
	                    <abbr title="" class="ttip" data-original-title="Twitter">T</abbr>: <a href="https://twitter.com/erikfig">twitter.com/erikfig</a><br>
	                    <abbr title="" class="ttip" data-original-title="Skype">S</abbr>: erik_af<br></small>
	                    <abbr title="Goole+">G+</abbr>: <a href="https://plus.google.com/+ErikFigueiredoDs?rel=author">Google</a>
	                </address>
				</div>
				
		  	</div>
		  </div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<hr>
					<p class="text-center">
						By <a href="#">Erik Figueiredo</a> - <a href="#">www.erikfiguieredo.com.br</a> - <a href="#">falecom@erikfigueiredo.com.br</a> - Blog em Wordpress
					</p>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php echo BASE_URL; ?>js/bootstrap.min.js"></script>
	<script src="<?php echo BASE_URL; ?>js/mansonry.js"></script>
	<script src="<?php echo BASE_URL; ?>js/script.js"></script>
</body>
</html>