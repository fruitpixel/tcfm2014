<?php 

/*
Template Name: CSR
*/


get_header(); ?>

	<?php get_template_part( 'parts/tpl-nav', 'csr' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', 'csr' ); ?>			
		
		<div class="container">			
			<div class="row">
			
				<div class="small-12 columns">
				
					<?php get_template_part( 'parts/tpl-before-content', 'csr' ); ?>
					
					<?php if ( have_posts() ) : ?>
						<?php while(have_posts()) : the_post(); ?>
							<div id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?> data-equalizer>
								<div class="small-12 medium-8 columns" data-equalizer-watch>
									<?php the_content(); ?>

									<div class="csr-child-pages">
										<div class="row">

											<?php
											// Set up the objects needed
											$my_wp_query = new WP_Query();
											$all_wp_pages = $my_wp_query->query( array( 'post_type' => 'page' ) );

											// Filter through all pages and find Portfolio's children
											$my_children = get_page_children( get_the_ID(), $all_wp_pages );

											foreach ( $my_children as $post ) : setup_postdata( $post );
											?>

												<div class="small-12 medium-6 columns">
													<div class="csr-child">
														<div class="csr-child-content">
															<?php if ( has_post_thumbnail() ) : 
																the_post_thumbnail( 'full' ); 
															else : ?>
																<h2><?php the_title(); ?></h2>
															<?php endif; ?>
														</div>
														<div class="button-container">								
															<a href="<?php the_permalink(); ?>" class="button home-button">Read more</a>
														</div>
													</div>
												</div>

											<?php endforeach; ?>
											<?php wp_reset_postdata(); ?>

										</div>
									</div>

								</div>
								<div class="small-12 medium-4 columns">
									<?php get_template_part( 'parts/tpl-sidebar-right', 'csr' ); ?>
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
									
					<?php get_template_part( 'parts/tpl-after-content', 'csr' ); ?>
					
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
		
		<?php get_template_part( 'parts/tpl-after-all-content', 'csr' ); ?>
	
	</div>

<?php get_footer();
