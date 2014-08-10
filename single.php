<?php get_header(); ?>

	<?php get_template_part( 'parts/tpl-nav', 'single' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', 'single' ); ?>			
		
		<div id="middle" class="container">			
			<div class="row">
			
				<div id="column-2" class="<?php pxls_contentcolumn_width_classes(); ?>">
				
					<?php get_template_part( 'parts/tpl-before-content', 'single' ); ?>
					
					<?php if ( have_posts() ) : ?>
						<?php while( have_posts() ) : the_post(); ?>
							<div id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?>>
								<div class="small-12 columns">
									<?php the_content(); ?>
									<?php wp_link_pages(); ?>
									<?php the_tags('Tagged with: ',' • ','<br />'); ?>
								</div>
							</div>
							<div class="row">
								<div class="small-12 columns">
									<?php comments_template(); ?> 
								</div>
							</div>
						<?php endwhile; ?>
					<?php else : ?>
						<div class="row">
							<div class="small-12 columns">
								<h2>Not Found</h2>
								<p>We couldn't find what you were looking for...sorry!</p>
							</div>
						</div>
					<?php endif; ?>
					
					<?php get_template_part( 'parts/tpl-after-content', 'single' ); ?>
					
				</div>
				
				<?php get_template_part( 'parts/tpl-sidebar-left', 'single' ); ?>

				<?php get_template_part( 'parts/tpl-sidebar-right', 'single' ); ?>

			</div>
		</div>
		
		<?php get_template_part( 'parts/tpl-after-all-content', 'single' ); ?>
	
	</div>

<?php get_footer();
