<?php get_header(); ?>

	<?php get_template_part( 'parts/tpl-nav', 'blog' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', 'blog' ); ?>	

		
		<div class="container">			
			<div class="row">			
				
				<div class="small-12 columns">

					<h1>News from TCFM</h1>	
				
					<?php get_template_part( 'parts/tpl-before-content', 'blog' ); ?>
					
					<?php if ( have_posts() ) : ?>
						<div class="row" data-equalizer>
							<?php while(have_posts()) : the_post(); ?>
								<div class="small-12 medium-6 large-4 columns end">
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<?php the_post_thumbnail( 'news-item-thumb' ); ?>
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
					<?php else : ?>
						<div class="row">
							<div class="small-12 columns">
								<h2>Not Found</h2>
								<p>We couldn't find what you were looking for...sorry!</p>
							</div>
						</div>
					<?php endif; ?>

					<?php get_template_part( 'parts/tpl-after-content', 'blog' ); ?>
					
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
		
		<?php get_template_part( 'parts/tpl-after-all-content', 'blog' ); ?>
	
	</div>

<?php get_footer();
