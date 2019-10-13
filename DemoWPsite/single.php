	<?php get_header();?>
		<div class="content_wrapper">
			<div class="left_content" style=" width: 100%;">
				<?php 
				
				if(have_posts()) : 
					while(have_posts()) : the_post(); ?>
					
					<article class="home_artcl_wrap">
						<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
						
						<div class="featured_image">
							<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
						</div>
						
						<div class="post_meta">
							Posted by: <?php the_author_posts_link();?> | Posted on: <?php the_time('M d, Y');?>| Category: <?php the_category(' , ');?>
						</div>
						<p><?php the_content(); ?></p>
						<?php comments_template(); ?>
					</article>
					
				<?php	endwhile;
				else:
				echo 'No Posts Found';
				endif;
				
				?>
			</div>
			
			<br class="clear" />
		</div>
		
		<div class="b_f_area clearfix">
		<?php get_template_part ('bottom_widget');?>
		</div>
	<?php get_footer();?>