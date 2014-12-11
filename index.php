<?php get_header(); ?>
	
	<div class="row postsindex" style="padding-top:20px;">
	
		<div class="col-sm-8">
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
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
			
				<h1>Nenhum post encontrado</h1>
				
			<?php endif; ?>
		
		</div>
		
		<?php get_sidebar() ?>
	
	</div>
    
<?php get_footer() ?>