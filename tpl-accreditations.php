<?php 

/*
Template Name: Accreditations
*/


get_header( 'accreditations' ); ?>

	<?php get_template_part( 'parts/tpl-nav', 'accreditations' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', 'accreditations' ); ?>			
		
		<div class="container">			
			<div class="row">
			
				<div class="small-12 columns">
				
					<?php get_template_part( 'parts/tpl-before-content', 'accreditations' ); ?>
					
					<?php if ( have_posts() ) : ?>
						<?php while(have_posts()) : the_post(); ?>
							<div id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?>>
								<div class="small-12 columns">
									<?php the_content(); ?>

									<div class="accreditations">
										<div class="row">
											<?php
											// Define custom query parameters
											$custom_query_args = array( 
												'post_type'      => 'accreditation',
												'posts_per_page' => -1
											);

											// Get current page and append to custom query parameters array
											$custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

											// Instantiate custom query
											$custom_query = new WP_Query( $custom_query_args );

											// Pagination fix
											$temp_query = $wp_query;
											$wp_query   = NULL;
											$wp_query   = $custom_query;

											// Output custom query loop
											if ( $custom_query->have_posts() ) :
											    while ( $custom_query->have_posts() ) :
											        $custom_query->the_post(); ?>

											    		<div class="small-12 medium-6 large-4 columns end">
															<div class="accreditation">
																<div class="accreditation-content">
																	<?php if ( has_post_thumbnail() ) : 
																		the_post_thumbnail( 'accreditation-thumb' ); 
																	else : ?>
																		<h2><?php the_title(); ?></h2>
																	<?php endif; ?>
																</div>
																<div class="button-container">								
																	<a href="#" data-reveal-id="<?php echo $post->post_name; ?>" class="button accreditation-button">More information</a>
																</div>

																<div id="<?php echo $post->post_name; ?>" class="reveal-modal small" data-reveal>
																	<div class="accreditation-popover-topbar">
																		<a class="close-reveal-modal">X</a>
																	</div>
																	<div class="accreditation-popover-content">																	
																		<h1><?php the_title(); ?></h1>
																		<?php the_content(); ?>																		
																	</div>
																</div>
															</div>
														</div>
											        
											    <?php endwhile;
											endif;
											// Reset postdata
											wp_reset_postdata();

											$big = 999999999; // need an unlikely integer
											echo paginate_links( array(
												'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
												'format' => '?paged=%#%',
												'current' => max( 1, get_query_var('paged') ),
												'total' => $custom_query->max_num_pages
											) );

											// Reset main query object
											$wp_query = NULL;
											$wp_query = $temp_query;
											?>

										</div>
									</div>

								</div>

							</div>
						<?php endwhile; ?>

						<div class="row">
							<div class="small-12 columns">
								<div class="paginate-outer-container">
									<div class="paginate-inner-container">
										<?php global $wp_query;
										$big = 999999999; // need an unlikely integer
										echo paginate_links( array(
											'base'		=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
											'format' 	=> '?paged=%#%',
											'current' 	=> max( 1, get_query_var('paged') ),
											'prev_text' => __('prev'),
											'next_text' => __('next'),
											'total' 	=> $wp_query->max_num_pages,
											'type'		=> 'list'
										) );

										// Reset main query object
										$wp_query = NULL;
										$wp_query = $temp_query;

										?>
									</div>
								</div>									
							</div>
						</div>

					<?php else : ?>
						<div class="row">
							<div class="small-12 columns">
								<h2>Not Found</h2>
								<p>We couldn't find what you were looking for...sorry!</p>
							</div>
						</div>
					<?php endif; ?>
									
					<?php get_template_part( 'parts/tpl-after-content', 'accreditations' ); ?>
					
				</div>

			</div>

			

		</div>
		
		<?php get_template_part( 'parts/tpl-after-all-content', 'accreditations' ); ?>
	
	</div>

<?php get_footer( 'accreditations' );
