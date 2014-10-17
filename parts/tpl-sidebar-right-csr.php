
<div class="sidebar-outercontainer">
	<div class="sidebar-container">
		<div class="sidebar-content" data-equalizer-watch>

			<?php
			$args = array(
			        'posts_per_page'   => 1,
			        'post_type'        => 'testimonials',
			        'orderby'          => 'rand'
			    );
			$testimonial_posts = get_posts( $args );
			
			
			if ( $testimonial_posts ) : 
				foreach ( $testimonial_posts as $post ) : setup_postdata( $post ); ?>
					<div class="sidebar-item">
						<div class="row">
							<div class="small-12 columns">
								<h2 class="testimonials-title">What our clients say about our people</h2>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
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
						</div>
					</div>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>


			<?php
			$args = array(
			        'posts_per_page'   => 1,
			        'post_type'        => 'post'
			    );
			$newsposts = get_posts( $args );
			if ( $newsposts ) : $post = $newsposts[0]; setup_postdata( $post ); ?>
				<div class="sidebar-item">
					<div class="row">
						<div class="small-12 columns">
							<h1 class="news-title">Recent News</h1>
						</div>
					</div>
					<div class="row">
						<div class="small-12 columns">
							<div class="news">
								<h2 class="title"><?php the_title(); ?></h2>
								<div class="content">
									<?php echo pxls_excerpt( 15 ); ?>
								</div>								
								<a href="<?php the_permalink(); ?>" class="button home-button">Read more</a>
							</div>
						</div>
					</div>
				</div>
				<?php wp_reset_postdata(); ?>	
			<?php endif; ?>

				
		</div>
	</div>	
</div>
				