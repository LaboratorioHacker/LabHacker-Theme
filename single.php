<?php get_header(); ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
	
	<div class="row post" style="padding-top:20px;">
	
		<div class="post well container">
			
			<div class="page-header">
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			</div>
			
			<?php if(has_post_thumbnail()){
					
				echo '<div class="postthumbnail">';
				the_post_thumbnail( array(700, 500) );
				echo '</div>';
					
			} ?>
			
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

	</div>
	
	<?php endwhile; ?>
    
<?php get_footer(); ?>