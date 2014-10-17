<?php 
/*
Template Name: Testimonials
*/

get_header( 'testimonials' ); ?>

	<?php get_template_part( 'parts/tpl-nav', 'testimonials' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', 'testimonials' ); ?>	

		
		<div class="container">			
			<div class="row">			
				
				<div class="small-12 columns">

					
					<?php get_template_part( 'parts/tpl-before-content', 'testimonials' ); ?>

					<?php $testimonialspage = get_page_by_path( 'testimonials' ); ?>
					<?php if ( $testimonialspage ) : ?>
						


						<h1><?php echo $testimonialspage->post_title; ?></h1>
						<?php echo apply_filters( 'the_content', $testimonialspage->post_content ); ?>

						<div class="archive-items">
							<div class="row" data-equalizer>

								<?php

								// Get current page and append to custom query parameters array
								$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

								// Define custom query parameters
								$custom_query_args = array(
									'paged'		  => $paged,
									'post_type'   => 'testimonials_cpt'
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

							    		<div class="small-12 medium-6 large-4 columns end">
							    			<div class="testimonial">
												<h2 class="client-name"><?php the_title(); ?></h2>
												<div class="content">
													<?php echo pxls_excerpt( 15 ); ?>
												</div>								
												<div class="button-container">								
													<a href="<?php the_permalink(); ?>" class="button home-button">Read more</a>
												</div>
											</div>
										</div>
								        
								    <?php endwhile;
								endif;

								// Reset postdata
								wp_reset_postdata();


								?>
							</div>
						</div>	

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

					<?php get_template_part( 'parts/tpl-after-content', 'testimonials' ); ?>
					
				</div>

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
		
		<?php get_template_part( 'parts/tpl-after-all-content', 'testimonials' ); ?>
	
	</div>

<?php get_footer( 'testimonials' );
