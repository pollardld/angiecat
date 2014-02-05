<?php get_header(); ?>

	<div class="spread">
		
		<section class="span8">
			
			<?php 
	
				if ( have_posts() ) :
				
					while ( have_posts() ) : the_post(); ?>		
									
					<article class="post">
						
						<div class="thumb">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'featured-img' ); ?></a>

							<div class="date">
								<span class="date-category">
									<?php
										$category = get_the_category();
										echo '<a href="/category/';
										echo $category[0]->category_nicename;
										echo '">';
										echo $category[0]->cat_name;
										echo '</a>';
									?>
								</span>
								<span class="date-call"><?php the_time('M d'); ?></span>
								<div class="noise"></div>
							</div>
						</div>
							
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

						<?php the_excerpt(); ?>
						
						<div class="tags"><?php the_tags(); ?></div>

					</article>
				
					<?php endwhile; ?>
					
					<nav class="post-page-nav-prev">
						<?php previous_posts_link('Prev'); ?>
					</nav>

					<nav class="post-page-nav-next">
						<?php next_posts_link('Next');?>
					</nav>
					
			<?php endif; ?>	
		
		</section>
			
		<?php get_sidebar(); ?>
		
	</div>

<?php
	get_footer();