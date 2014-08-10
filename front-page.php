<?php get_header(); ?>

	<?php get_template_part( 'parts/tpl-nav', 'front-page' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', 'front-page' ); ?>			
		
		
		<div class="container">			
			<div class="row" data-equalizer>					
				<div class="small-12 large-7 columns" data-equalizer-watch>
					<div class="container has-button">
						<?php if ( have_posts() ) : ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php the_content(); ?>	
							<?php endwhile; ?>
						<?php endif; ?>
						<div class="button-container">
							<a href="<?php echo get_permalink_by_slug( 'about-us', 'page' ); ?>" class="button home-button">More about us</a>
						</div>		
					</div>
				</div>
				<div class="small-12 large-5 columns" data-equalizer-watch>
					<div class="container has-button home-news">
						<?php 
						$args = array( 'posts_per_page' => 1 );
						$newsposts = get_posts( $args );
						if ( $newsposts ) :
							foreach ( $newsposts as $post ) : setup_postdata( $post );
						?>

								<div class="row">
									<div class="small-12 large-7 columns">
										<h2><?php the_title(); ?></h2>
										<?php echo pxls_excerpt(); ?>
									</div>
									<div class="small-12 large-5 columns">
										<?php
										if ( has_post_thumbnail() ) {
											the_post_thumbnail( 'home-news-thumb' );
										}
										?>
									</div>
								</div>

								<div class="button-container">								
									<a href="<?php the_permalink(); ?>" class="button home-button">Read more</a>
								</div>

							<?php endforeach; ?>
							<?php wp_reset_postdata(); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<?php
			$args = array(
			        'posts_per_page'   => 2,
			        'post_type'        => 'testimonial'
			    );
			$testimonial_posts = get_posts( $args );
			?>

			<div id="home-testimonials-container">

				<div class="row">
					<div class="small-12 large-5 columns end">
						<h1>What our clients say about our people</h1>
					</div>
				</div>

				<div class="testimonials">
					<div class="row" data-equalizer>
						<div class="small-12 large-4 columns" data-equalizer-watch>
							<?php if ( $testimonial_posts ) : $post = $testimonial_posts[0]; setup_postdata( $post ); ?>
								<div class="testimonial">
									<h2 class="client-name"><?php the_title(); ?></h2>
									<div class="content">
										<?php echo pxls_excerpt( 15 ); ?>
									</div>								
									<div class="button-container">								
										<a href="<?php the_permalink(); ?>" class="button home-button">Read more</a>
									</div>
								</div>
							<?php endif; ?>
						</div>

						<div class="small-12 large-4 columns" data-equalizer-watch>
							<img src="<?php echo trailingslashit( PXLS_URI ) ?>images/tcfm-people.jpg" alt="TCFM People" class="vacancies-bg">
							<div class="button-container">								
								<a href="<?php echo home_url('/'); ?>recruitment/" class="button home-button">See the latest vacancies</a>
							</div>
						</div>

						<div class="small-12 large-4 columns" data-equalizer-watch>
							<?php if ( $testimonial_posts && count( $testimonial_posts ) > 1 ) : $post = $testimonial_posts[1]; setup_postdata( $post ); ?>
								<div class="testimonial">
									<h2 class="client-name"><?php the_title(); ?></h2>
									<div class="content">
										<?php echo pxls_excerpt( 15 ); ?>
									</div>	
									<div class="button-container">								
										<a href="<?php the_permalink(); ?>" class="button home-button">Read more</a>
									</div>
								</div>
							<?php endif; ?>
						</div>
						
					</div>
				</div>

			</div>
		</div>			
								

		<?php get_template_part( 'parts/tpl-after-all-content', 'front-page' ); ?>
	
	</div>

<?php get_footer();
