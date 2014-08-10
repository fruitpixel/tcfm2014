<?php get_header(); ?>

	<?php get_template_part( 'parts/tpl-nav', 'page' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', 'page' ); ?>			
		
		<div id="middle" class="container">			
			<div class="row">
			
				<div id="column-2" class="<?php pxls_contentcolumn_width_classes(); ?>">
				
					<?php get_template_part( 'parts/tpl-before-content', 'page' ); ?>
					
					<?php if ( have_posts() ) : ?>
						<?php while(have_posts()) : the_post(); ?>
							<div id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?>>
								<div class="small-12 columns">
									<?php the_content(); ?>
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
					
					<?php get_template_part( 'parts/tpl-after-content', 'page' ); ?>
					
				</div>
				
				<?php get_template_part( 'parts/tpl-sidebar-left', 'page' ); ?>

				<?php get_template_part( 'parts/tpl-sidebar-right', 'page' ); ?>

			</div>
		</div>
		
		<?php get_template_part( 'parts/tpl-after-all-content', 'page' ); ?>
	
	</div>

<?php get_footer();
