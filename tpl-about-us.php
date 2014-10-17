<?php 

/*
Template Name: AboutUs
*/


get_header(); ?>

	<?php get_template_part( 'parts/tpl-nav', 'about-us' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', 'about-us' ); ?>			
		
		<div class="container">			
			<div class="row">
			
				<div class="small-12 columns">
				
					<?php get_template_part( 'parts/tpl-before-content', 'about-us' ); ?>
					
					<?php if ( have_posts() ) : ?>
						<?php while(have_posts()) : the_post(); ?>
							<div id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?>>
								<div class="small-12 columns">
									<h1><?php the_title(); ?></h1>
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

					<?php
					$args = array(
					        'posts_per_page'   => -1,
					        'post_type'        => 'staff_profile'
					    );
					$profile_posts = get_posts( $args );
					if ( $profile_posts ) : ?>						

						<div class="row">

								<?php foreach ( $profile_posts as $post ) : setup_postdata( $post ); 
									$pod = pods( 'staff_profile', get_the_ID() );
									$twitter = $pod->field( 'twitter' );
									$linkedin = $pod->field( 'linkedin' );
									$job_title = $pod->field( 'job_title' );
									?>
									<div class="small-12 medium-3 columns end">
										<div class="staff-profile">
											<div class="staff-profile-content">
												<?php if ( has_post_thumbnail() ) : 
													echo get_the_post_thumbnail( get_the_ID(), 'staff-profile' ); 
												else : ?>
													<img src="<?php echo trailingslashit( PXLS_URI ) ?>images/generic-profile-pic.png" alt="No profile image">
												<?php endif; ?>
												<h2 class="staff-name"><?php the_title(); ?></h2>
												<p class="staff-job-title"><?php echo $job_title; ?></p>
												<?php if ( $twitter || $linkedin ) : ?>
													<ul>
														<?php if ( $twitter ) : ?>
															<li><a href="<?php echo $twitter; ?>" title="Twitter" target="_blank"><img src="<?php echo trailingslashit( PXLS_URI ) ?>images/small-social-icon-twitter.png" alt="Twitter" /></a></li>
														<?php endif; ?>
														<?php if ( $linkedin ) : ?>
															<li><a href="<?php echo $linkedin; ?>" title="LinkedIn" target="_blank"><img src="<?php echo trailingslashit( PXLS_URI ) ?>images/small-social-icon-linkedin.png" alt="LinkedIn" /></a></li>
														<?php endif; ?>
													</ul>
												<?php endif; ?>
												<a href="<?php the_permalink(); ?>" class="button">Read Bio</a>
											</div>
										</div>
									</div>
										
								<?php endforeach; 
								wp_reset_postdata(); ?>

						</div>
						
					<?php endif; ?>
					
					<?php get_template_part( 'parts/tpl-after-content', 'about-us' ); ?>
					
				</div>
				
				<?php get_template_part( 'parts/tpl-sidebar-left', 'about-us' ); ?>

				<?php get_template_part( 'parts/tpl-sidebar-right', 'about-us' ); ?>

			</div>

			<div id="contact" class="page-angled-bg">
				<div class="row">
					<div class="small-12 large-5 columns end">
						<div class="contact-link-container">
							<a href="<?php echo get_permalink_by_slug( 'contact-us', 'page' ); ?>">Get in touch with us</a>
						</div>
						
					</div>
				</div>
			</div>

		</div>
		
		<?php get_template_part( 'parts/tpl-after-all-content', 'about-us' ); ?>
	
	</div>

<?php get_footer();
