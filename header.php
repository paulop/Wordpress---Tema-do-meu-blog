<?php
	define('BASE_URL', get_template_directory_uri().'/');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/bootstrap-theme.min.css">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php
		if ( is_singular() && get_option( 'thread_comments' ))
			wp_enqueue_script( 'comment-reply' );
			wp_head();
	?>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<header id="header">
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<ul class="nav navbar-nav">
						<li>
							<a href="<?php echo get_site_url(); ?>">
								<img src="<?php echo BASE_URL; ?>img/logo_erik.png" alt="Blog do Erik Figueiredo">
							</a>
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-principal div">
								<span class="sr-only">Ver menu</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</li>
					</ul>
				</div>
				<div class="collapse navbar-collapse" id="menu-social">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="https://www.facebook.com/erikfigueiredods" class="ttip" title="Facebook">
								<img src="<?php echo BASE_URL; ?>img/facebook.png" alt="Meu Facebook">
							</a>
						</li>
						<li>
							<a href="https://twitter.com/erikfig" class="ttip" title="Twitter">
								<img src="<?php echo BASE_URL; ?>img/twitter.png" alt="Meu Twitter">
							</a>
						</li>
						<li>
							<a href="https://plus.google.com/u/0/106409912896036216420/" class="ttip" title="Google+">
								<img src="<?php echo BASE_URL; ?>img/googleplus.png" alt="Meu Google+">
							</a>
						</li>
						<li>
							<a href="https://www.youtube.com/user/erikfigueiredo?sub_confirmation=1" class="ttip" title="Youtube">
								<img src="<?php echo BASE_URL; ?>img/youtube.png" alt="Meu Youtube">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<nav id="menu-principal" class="navbar navbar-default navbar-static-top navbar-shadow" role="navigation">
			<?php
				include 'helpers'.DIRECTORY_SEPARATOR.'Sub_Menus.php';
				$Sub_Menus= new Sub_Menus();
				wp_nav_menu(array(
					'theme_location'=>'menu_top',
					'container_class'=>'collapse navbar-collapse text-center',
					'menu_class'=>'nav navbar-nav',
					'walker'=>$Sub_Menus
				));
			?>
		</nav>
		
		<div class="text-center">
			<h1><?php
				if(is_home()) {
					bloginfo('name');
				} else if (is_category()) {
					$taxonomy_slug = $wp_query->tax_query->queries[0]['taxonomy'];
					$term_slug = $wp_query->tax_query->queries[0]['terms'][0];
					$term = get_term_by('slug', $term_slug, $taxonomy_slug);
					$term_name = $term->name;
					echo '<small>Artigos de </small> '.$term_name;
				} else if (is_author()) {
					echo '<small>Artigos de </small> '.get_the_author();
				} else {
					?><a href="<?php the_permalink(); ?>"><?php the_title();?></a><?php
				}
			?></h1>
			<?php
				if(is_home()) {
					?><h2><?php bloginfo('description'); ?></h2><?php
				} else {
					?>Você ainda pode: <a href="http://www.webdevbr.com.br" class="btn btn-primary btn-lg">ver meus cursos</a> <a href="https://www.youtube.com/user/erikfigueiredo?sub_confirmation=1" class="btn btn-danger btn-lg">ou assinar meu canal no Youtube</a><?php
				}
			?>
			<hr>
			<?php if(is_home() and get_query_var('paged')==null) :?>
			<p id="slider">
				<a href="#">
					<img src="<?php echo BASE_URL; ?>img/slider.jpg" alt="slider" class="img-responsive">
				</a>
			</p>
			<?php endif;?>
		</div>
		
	</header>
