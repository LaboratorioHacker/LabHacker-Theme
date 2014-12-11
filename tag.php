<?php get_header(); ?>
	
	<div class="row postsindex" style="padding-top:20px;">
	
		<div class="col-sm-8">
		
			<?php $zero = 0; ?>
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<?php if ($zero == 0) { ?>
			
			<div class="jumbotron">
				<h3 style="border-bottom:1px solid #fff;padding-bottom:10px;">Exibindo todos os posts da tag <b><?php single_tag_title(); ?></b></h3>
				<p><?php echo tag_description(); ?></p>
			</div>
				
			<?php $zero++;} ?>
			
			<div class="post well">
			
				<div class="post-header">
					<?php if(has_post_thumbnail()){
					
						echo '<div class="noshow posthumbindex">';
						the_post_thumbnail( array(700, 500) );
						echo '</div>';
					
					} ?>

					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				</div>
			
				<div class="post-content">
					
					<?php the_content(); ?>
					
				</div>
				
				<div class="post-footer">
				
					<?php the_tags('<div class="tags"><b><i class="fa fa-tags"></i> Tags: </b>',', ','</div>'); ?>
					
					<div class="categoria"><b><i class="fa fa-folder"></i> Categoria:</b> <?php the_category(', '); ?></div>
					
					<div class="autor"><b><i class="fa fa-user"></i> Autor:</b> <?php the_author_posts_link(); ?></div>
					
					<div class="data"><b><i class="fa fa-calendar"></i> Data:</b> <a href="<?php echo get_month_link( get_the_time('Y'), get_the_time('m') ); ?>" title="Ver todos os artigos deste mês"><?php the_date(); ?></a></div>
				
				</div>
			
			</div>
			
			<?php endwhile; else : ?>
			
				<div class="jumbotron">
					<h1>Nenhum Post Encontrado</h1>
					<p>Esta tag ainda não possui nenhum post.</p>
					<div style="width:100%;padding:10px;"><?php get_search_form(); ?></div>
					<p><a class="btn btn-primary btn-lg" href="<?php echo get_site_url(); ?>" role="button"><i class="fa fa-home"></i> Ir para a página inicial</a></p>
				</div>
				
			<?php endif; ?>
		
		</div>
		
		<?php get_sidebar() ?>
	
	</div>
    
<?php get_footer() ?>