<?php get_header( 'testimonial' ); ?>

	<?php get_template_part( 'parts/tpl-nav', 'testimonial' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', 'testimonial' ); ?>			
		
		<div class="container">			
			<div class="row">
			
				<div class="small-12 columns">
				
					<?php get_template_part( 'parts/tpl-before-content', 'testimonial' ); ?>
					
					<?php if ( have_posts() ) : ?>
						<?php while( have_posts() ) : the_post(); ?>

							<div id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?> data-equalizer>
								<div class="small-12 medium-8 columns" data-equalizer-watch>
									<div class="page-banner <?php if ( has_post_thumbnail() ) echo 'has-post-thumbnail'; ?>">
										<?php if ( has_post_thumbnail() ) :
											the_post_thumbnail( 'page-banner' );
										endif; ?>
										
									</div>
									<div class="post-content">	
										<div class="testimonial-content">
											<?php the_content(); ?>											
										</div>								
										<div class="testimonial-title">
											<h1><?php the_title(); ?></h1>											
										</div>
										
									</div>										
								</div>
								<div class="small-12 medium-4 columns">
									<?php get_template_part( 'parts/tpl-sidebar-right', 'testimonial' ); ?>
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
					
					<?php get_template_part( 'parts/tpl-after-content', 'testimonial' ); ?>
					
				</div>
				
			</div>

		</div>
		
		<?php get_template_part( 'parts/tpl-after-all-content', 'testimonial' ); ?>
	
	</div>

<?php get_footer( 'testimonial' );
