<?php

/*
Template Name: Home
*/

get_header() ?>

	
	<div id="slider" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#slider" data-slide-to="0" class="active"></li>
			<li data-target="#slider" data-slide-to="1"></li>
			<li data-target="#slider" data-slide-to="2"></li>
		</ol>

		<div class="carousel-inner" role="listbox">
			<div class="item active"><a href="http://laboratoriohacker.org/participe/" title="Participe">
				<img src="<?php echo get_template_directory_uri(); ?>/img/robot.jpg" alt="Participe">
				<div class="carousel-caption">
					<h3><span>Participe</span></h3>
					<p><span>Junte-se a nós e comece a hackear o mundo. Não é preciso ser um gênio da física para começar!</span></p>
				</div>
			</a></div>
			<div class="item"><a href="http://projetos.laboratoriohacker.org/" title="Projetos">
				<img src="<?php echo get_template_directory_uri(); ?>/img/raspberry.jpg" alt="Projetos">
				<div class="carousel-caption">
					<h3><span>Projetos</span></h3>
					<p><span>Conheça as nossas invenções malucas que desenvolvemos no Laboratório</span></p>
				</div>
			</a></div>
			<div class="item"><a href="http://laboratoriohacker.org/agenda" title="Agenda">
				<img src="<?php echo get_template_directory_uri(); ?>/img/we.jpg" alt="Agenda">
				<div class="carousel-caption">
					<h3><span>Agenda</span></h3>
					<p><span>Confira nossa agenda e veja nossos próximos eventos e onde estaremos</span></p>
				</div>
			</a></div>
		</div>

		<a class="left carousel-control" href="#slider" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="right carousel-control" href="#slider" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Próximo</span>
		</a>
	</div>
	
	<div class="row main">
		<div class="col-md-4">
		
			<div class="page-header">
				<h1>Local</h1>
			</div>
		
			<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3483.0199473751154!2d-54.88469606726534!3d-29.193539643565003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sURI+Campus+Santiago!5e0!3m2!1spt-BR!2sbr!4v1415472567751" style="border:0" frameborder="0" height="250" width="100%"></iframe>
			
			<p>Nosso quartel general está localizado na sala 412/2 da URI Campus Santiago. Consulte <a href="<?php echo get_page_link(get_page_by_title( 'Agenda' )); ?>" title="Nossa Agenda">nossa agenda</a> antes para verificar se haverá alguém no local. Estamos lhe esperando jovem padawan.</p>
		
		</div>
		<div class="col-md-4">
			<div class="page-header">
				<h1>Agenda</h1>
			</div>
			
			<img src="<?php echo get_template_directory_uri(); ?>/img/calendar.jpg" alt="Agenda" style="max-width:100%;height:auto;">
			
			<p>Não podemos mais viajar no espaço tempo, nossa <a href="https://pt.wikipedia.org/wiki/TARDIS" title="O que é uma TARDIS?">TARDIS</a> está quebrada. Enquanto nossa equipe tenta arrumá-la teremos que seguir a agenda de encontros e reuniões.</p>
			
			<a href="<?php echo get_page_link(get_page_by_title( 'Agenda' )); ?>" title="Nossa Agenda" class="btn btn-primary" style="width:100%;">Acessar Agenda</a>
			
		</div>
		<div class="col-md-4 participe">
			<div class="page-header">
				<h1>Participe</h1>
			</div>
		
			<a href="https://www.facebook.com/LaboratorioHacker" title="Nossa Página no Facebook" class="btn btn-default facebook"><i class="fa fa-facebook"></i> Facebook</a>
			<a href="http://lists.laboratoriohacker.org/mailman/listinfo/labhacker_lists.laboratoriohacker.org" title="Nossa Lista de Discussões" class="btn btn-default ml"><i class="fa fa-users"></i> Lista de Discussões</a>
			<a href="http://wiki.laboratoriohacker.org/" title="Nossa Wiki" class="btn btn-default wiki"><i class="fa fa-archive"></i> Wiki</a>
			<a href="<?php echo get_page_link(get_page_by_title( 'Blog' )); ?>" title="Nosso Blog" class="btn btn-default blog"><i class="fa fa-globe"></i> Blog</a>
		
			<p>Inscreva-se na nossa lista de discussões e mande uma breve apresentação sua lá(diga quem você é, onde mora, com o que trabalha, o seus interesses...) que lhe guiaremos para o lado Jedi da força. Ah, e não se esqueça de frequentar nossas atividades!</p>
		
		</div>
	</div>
    
<?php get_footer(); ?>
