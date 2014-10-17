<?php get_header(); ?>

	<?php get_template_part( 'parts/tpl-nav', 'staffprofile' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', 'staffprofile' ); ?>			
		
		<div class="container">			
			<div class="row">
			
				<div class="small-12 columns">
				
					<?php get_template_part( 'parts/tpl-before-content', 'staffprofile' ); ?>
					
					<?php if ( have_posts() ) : ?>
						<?php while( have_posts() ) : the_post(); ?>
							<div id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?> data-equalizer>
								<div class="small-12 medium-8 columns" data-equalizer-watch>

									<?php get_template_part( 'parts/tpl-before-post-content', 'staffprofile' ); ?>

									<?php
									$pod = pods( 'staff_profile', get_the_ID() );
									$twitter = $pod->field( 'twitter' );
									$linkedin = $pod->field( 'linkedin' );
									$job_title = $pod->field( 'job_title' );
									?>

									<div class="post-content">
										<h1 class="post-title"><?php the_title(); ?></h1>
										<p class="staff-job-title"><?php echo $job_title; ?></p>

										<?php the_content(); ?>

										<a href="<?php echo get_permalink_by_slug( 'about-us', 'page' ); ?>" class="button back-button">Back to About us</a>
									</div>										
								</div>
								<div class="small-12 medium-4 columns">
									<?php get_template_part( 'parts/tpl-sidebar-right', 'staffprofile' ); ?>
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
					
					<?php get_template_part( 'parts/tpl-after-content', 'staffprofile' ); ?>
					
				</div>
				
			</div>

			<div class="page-angled-bg">
				<div class="row">
					<div class="small-12 columns">
					
						<div class="row">
							<div class="small-12 medium-8 columns end">
								<div class="more-info-container">
								</div>									
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php get_template_part( 'parts/tpl-after-all-content', 'staffprofile' ); ?>
	
	</div>

<?php get_footer();
