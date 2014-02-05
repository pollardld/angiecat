<?php get_header(); ?>

	<div class="spread">
		
		<section class="span8">
			
			<?php while ( have_posts() ) : the_post(); ?>
				
				<article class="post">
					
					<div class="thumb">
						<?php the_post_thumbnail( 'featured-thumb' ); ?>

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
							<span class="date-call"><?php the_date('M d'); ?></span>
							<div class="noise"></div>
						</div>
					</div>
						
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<?php the_content(); ?>
					
					<div class="tags"><?php the_tags(); ?></div>

					<div class="comments">

						<?php	
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}
						?>
						
					</div>

					<nav class="post-page-nav-prev">
						<?php previous_post_link('%link', 'Prev'); ?>
					</nav>

					<nav class="post-page-nav-next">
						<?php next_post_link('%link', 'Next');?>
					</nav>
					
				</article>
			
			<?php endwhile; ?>	
		
		</section>
			
		<?php get_sidebar(); ?>
		
	</div>

<?php
	get_footer();