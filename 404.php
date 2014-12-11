<?php

get_header();

?>

<div class="jumbotron container" style="margin-top:20px;">
  <h1 style="font-size:8em;">Erro 404</h1>
  <p style="font-size:2em;">Não conseguimos localizar a página, ela pode ter sido movida ou excluída.</p>
  <div style="width:100%;padding:10px;"><?php get_search_form(); ?></div>
  <p><a class="btn btn-primary btn-lg" href="<?php echo get_site_url(); ?>" role="button"><i class="fa fa-home"></i> Ir para a página inicial</a></p>
</div>

<?php

get_footer();

?>