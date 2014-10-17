<?php get_header( 'search' ); ?>

	<?php get_template_part( 'parts/tpl-nav', 'search' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', 'search' ); ?>			
		
		<div class="container">			
			<div class="row">
			
				<div class="small-12 columns">

					<h1>Search Results</h1>	
				
					<?php get_template_part( 'parts/tpl-before-content', 'search' ); ?>
					
					<?php if ( have_posts() ) : ?>

						<div class="row" data-equalizer>							

							<?php while(have_posts()) : the_post(); ?>

								<div class="small-12 columns">
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<div class="content" data-equalizer-watch>
											<h2><?php the_title(); ?></h2>
											<!-- <p class="small-date">Published on: <?php the_time( get_option( 'date_format' ) ); ?></p> -->
											<?php echo pxls_excerpt( 20 ); ?>
											<div class="button-container">								
												<a href="<?php the_permalink(); ?>" class="button home-button">Read more</a>
											</div>
										</div>									
									</article>
								</div>

							<?php endwhile; ?>
							
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
						<article>
							<p>The search produced no results!</p>
						</article>
					<?php endif; ?>

					<?php get_template_part( 'parts/tpl-after-content', 'search' ); ?>
					
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
		
		<?php get_template_part( 'parts/tpl-after-all-content', 'search' ); ?>
	
	</div>

<?php get_footer( 'search' );
