<?php get_header(); ?>

	<div class="spread">
		
		<section class="span8">
			
			<?php
			
			wp_reset_query();

			if ( have_posts() ) : ?>

				<h1 class="cat-title"><?php printf( __( 'Tag Archives: %s', 'twentyfourteen' ), single_tag_title( '', false ) ); ?></h1>

				<?php while ( have_posts() ) : the_post(); ?>
				
				<article class="post">
						
						<div class="thumb">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'featured-img' ); ?></a>

							<div class="date">
								<span class="date-category">
									<?php printf( __( '%s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?>
								</span>
								<span class="date-call"><?php the_time('M d'); ?></span>
								<div class="noise"></div>
							</div>
						</div>
							
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

						<?php the_excerpt(); ?>
						
						<div class="tags"><?php the_tags(); ?></div>

					</article>
			
			<?php endwhile;  ?>

			<nav class="post-page-nav-prev">
				<?php previous_posts_link('Prev'); ?>
			</nav>

			<nav class="post-page-nav-next">
				<?php next_posts_link('Next');?>
			</nav>

			<?php
			else:
				echo '<h1>There are no posts here yet. Soon, my pretty.</h1>';
			
			endif; ?>
		
		</section>
			
		<?php get_sidebar(); ?>
		
	</div>

<?php
	get_footer();