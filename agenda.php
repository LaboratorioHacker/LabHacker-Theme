<?php

/*
Template Name: Agenda
*/

get_header() ?>

	
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
					
					<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;hl=pt_BR&amp;bgcolor=%23F5F5F5&amp;src=rq9gtdpm15oi68fto628qvu8vs%40group.calendar.google.com&amp;color=%23711616&amp;ctz=America%2FSao_Paulo" style="width:100%;height:;border-width:0;" frameborder="0" scrolling="no"></iframe>

				</div>
			</div>

	</div>
	
	<?php endwhile; ?>
	
<?php get_footer(); ?>