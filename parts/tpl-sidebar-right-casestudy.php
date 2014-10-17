
<div class="sidebar-outercontainer">
	<div class="sidebar-container">
		<div class="sidebar-content" data-equalizer-watch>
			<?php
			$pod = pods( 'case_study', get_the_id() );
			$testimonial = $pod->field( 'testimonial' );
			if ( $testimonial ) : $id = $testimonial["ID"]; $post = get_post( $id ); setup_postdata( $post ); 
				$quotee = pods_field( 'testimonials', $id, 'quotee' );
				$quotee_position = pods_field( 'testimonials', $id, 'quotee_position' );
				?>
				<div class="sidebar-item">
					<div class="row">
						<div class="small-12 columns">
							<div class="quote-container">
								<?php the_content(); ?>
								<p class="quotee"><?php echo $quotee[0]; ?></p>
								<p class="quotee-position"><?php echo $quotee_position[0]; ?></p>
							</div>
						</div>
					</div>
				</div>

				<?php wp_reset_postdata(); ?>
			<?php endif; ?>


			<?php
			$ids[] = get_the_ID();
			$args = array(
			        'posts_per_page'   => 2,
			        'post_type'        => 'post',
			        'post__not_in' 		=> $ids
			    );
			$newsposts = get_posts( $args );
			if ( $newsposts ) : ?>
				
				<div class="sidebar-item">
					<div class="row">
						<div class="small-12 columns">
							<h1 class="news-title">Recent News</h1>
						</div>
					</div>
					<?php foreach( $newsposts as $post ) : setup_postdata( $post ); ?>
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
						<?php wp_reset_postdata(); ?>
					<?php endforeach; ?>
				</div>
						
			<?php endif; ?>



				
		</div>
	</div>	
</div>
				