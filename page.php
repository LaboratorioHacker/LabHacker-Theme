<?php get_header(); ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
	
	<div class="row post" style="padding-top:20px;">
	
		<div class="post well container page">
			
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
			
			</div>

	</div>
	
	<?php endwhile; ?>
    
<?php get_footer(); ?>