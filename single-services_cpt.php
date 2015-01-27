<?php get_header(); ?>

	<?php get_template_part( 'parts/tpl-nav', 'service' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', 'service' ); ?>			
		
		<div class="container">			
			<div class="row">
			
				<div class="small-12 columns">
				
					<?php get_template_part( 'parts/tpl-before-content', 'service' ); ?>
					
					<?php if ( have_posts() ) : ?>
						<?php while( have_posts() ) : the_post(); ?>
							<div id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?> data-equalizer>
								<div class="small-12 medium-8 columns" data-equalizer-watch>
									<div class="post-content">
										<?php the_content(); ?>
										<div class="archive-items child-services">
											<div class="row" data-equalizer>

												<?php

												// Define custom query parameters
												$custom_query_args = array(
													'post_type'   => 'services_cpt',
													'post_parent' => get_the_ID()
												);

												// Instantiate custom query
												$custom_query = new WP_Query( $custom_query_args );

												// Pagination fix
												$temp_query = $wp_query;
												$wp_query   = NULL;
												$wp_query   = $custom_query;

												// Output custom query loop
												if ( $custom_query->have_posts() ) :
												    while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

											    		<div class="small-12 medium-6 columns end">
															<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
																
																<div class="content" data-equalizer-watch>
																	<?php the_post_thumbnail( 'services-item-thumb' ); ?>
																	<div class="button-container">								
																		<a href="<?php the_permalink(); ?>" class="button home-button"><?php the_title(); ?></a>
																	</div>
																</div>
																	
															</article>
														</div>
												        
												    <?php endwhile;
												endif;

												// Reset postdata
												wp_reset_postdata();

												// Reset main query object
												$wp_query = NULL;
												$wp_query = $temp_query;


												?>
											</div>
										</div>	
									</div>										
								</div>
								<div class="small-12 medium-4 columns">
									<?php get_template_part( 'parts/tpl-sidebar-right', 'service' ); ?>
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
					
					<?php get_template_part( 'parts/tpl-after-content', 'service' ); ?>
					
				</div>
				
			</div>

			<div class="page-angled-bg">
				<div class="row">
					<div class="small-12 columns">
					
						<div class="row">
							<div class="small-12 medium-8 columns end">
								<div class="more-info-container">
									<img src="<?php echo trailingslashit( PXLS_URI ) ?>images/icon-info.png" alt="Information">
									<h3 class="gform_title">Want more information?</h3>
									<span class="gform_description">We're looking forward to hearing from you.</span>
									<?php echo do_shortcode( '[gravityform id="1" name="Want more information?" title="false" description="false" ajax="true"]' ); ?>
								</div>									
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php get_template_part( 'parts/tpl-after-all-content', 'service' ); ?>
	
	</div>

<?php get_footer();
