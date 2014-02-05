<?php get_header(); ?>

	<div class="spread">
		
		<section class="span8">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<article class="post">
						
					<h2><?php the_title(); ?></h2>

					<?php the_content(); ?>
					
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