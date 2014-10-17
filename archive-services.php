<?php get_header(); ?>

	<?php get_template_part( 'parts/tpl-nav', 'archive-services' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', 'archive-services' ); ?>	

		
		<div class="container">			
			<div class="row">			
				
				<div class="small-12 columns">

					<?php $servicespage = get_page_by_path( 'services' ); ?>
					<?php //var_dump($servicespage);?>
					<?php if ( $servicespage ) : ?>
						<h1><?php echo $servicespage->post_title; ?></h1>
						<?php echo apply_filters( 'the_content', $servicespage->post_content ); ?>
					<?php endif; ?>

					<?php get_template_part( 'parts/tpl-before-content', 'archive-services' ); ?>
					
					<?php if ( have_posts() ) : ?>
						<div class="archive-items">
							<div class="row" data-equalizer>
								<?php while(have_posts()) : the_post(); ?>
									<div class="small-12 medium-6 large-4 columns end">
										<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
											
											<div class="content" data-equalizer-watch>
												<?php the_post_thumbnail( 'services-item-thumb' ); ?>
												<div class="button-container">								
													<a href="<?php the_permalink(); ?>" class="button home-button"><?php the_title(); ?></a>
												</div>
											</div>
												
										</article>
									</div>
								<?php endwhile; ?>
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

					<?php get_template_part( 'parts/tpl-after-content', 'archive-services' ); ?>
					
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
		
		<?php get_template_part( 'parts/tpl-after-all-content', 'archive-services' ); ?>
	
	</div>

<?php get_footer();
