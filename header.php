<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?><?php if (!is_front_page()){echo " | ";wp_title('');} ?></title>
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">

    <?php wp_head() ?>

    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header class="row">
		<div class="col-sm-8"><img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>"></div>
		<div class="col-sm-4">
			<h3><span class="label label-default">Carregando Status...</span></h3>
		</div>
	</header>
    
	<nav class="navbar navbar-default navbar navbartopo" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menutopo">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"></a>
			</div>
			<div class="collapse navbar-collapse">
				<?php wp_nav_menu(array(
					'container'       => false,
					'items_wrap'      => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>',
					'walker'          => new wp_bootstrap_navwalker
					));
				?>
			</div>
		</div>
	</nav>