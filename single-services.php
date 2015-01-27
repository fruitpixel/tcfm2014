<?php get_header(); ?>

	<?php get_template_part( 'parts/tpl-nav', 'single-services' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', 'single-services' ); ?>			
		
		<div class="container">			
			<div class="row">
			
				<div class="small-12 columns">
				
					<?php get_template_part( 'parts/tpl-before-content', 'single-services' ); ?>
					
					<?php if ( have_posts() ) : ?>
						<?php while( have_posts() ) : the_post(); ?>
							<div id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?> data-equalizer>
								<div class="small-12 medium-8 columns" data-equalizer-watch>
									<div class="post-content">
										<?php the_content(); ?>
									</div>										
								</div>
								<div class="small-12 medium-4 columns">
									<?php get_template_part( 'parts/tpl-sidebar-right', 'single-services' ); ?>
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
					
					<?php get_template_part( 'parts/tpl-after-content', 'single-services' ); ?>
					
				</div>
				
			</div>

			<div class="page-angled-bg">
				<div class="row">
					<div class="small-12 columns">
					
						<div class="row">
							<div class="small-12 medium-8 columns end">
								<div class="more-info-container">
									<img src="<?php echo trailingslashit( PXLS_URI ) ?>images/icon-info.png" alt="Information">
									<?php echo do_shortcode( '[gravityform id="1" name="Want more information?" ajax="true"]' ); ?>
								</div>									
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php get_template_part( 'parts/tpl-after-all-content', 'single-services' ); ?>
	
	</div>

<?php get_footer();
