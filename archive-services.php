<?php get_header(); ?>

	<?php get_template_part( 'parts/tpl-nav', 'archive-services' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', 'archive-services' ); ?>	

		
		<div class="container">			
			<div class="row">			
				
				<div class="small-12 columns">

					<h1><?php post_type_archive_title(); ?></h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet risus gravida, iaculis enim at, sodales lorem. Praesent tempus diam eu ipsum fringilla cursus. Phasellus nulla urna, iaculis vitae volutpat eget, facilisis sit amet dolor. Nam fringilla id metus eu ultricies. Aenean in nisi dapibus, purus non, commodo.</p>
				
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
								<?php global $wp_query;
								$big = 999999999; // need an unlikely integer
								echo paginate_links( array(
									'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
									'format' => '?paged=%#%',
									'current' => max( 1, get_query_var('paged') ),
									'total' => $wp_query->max_num_pages
								) );
								?>
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
