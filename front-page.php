<?php get_header(); ?>

	<?php get_template_part( 'parts/tpl-nav', 'front-page' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', 'front-page' ); ?>			
		
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

				
				<div class="row">
					<div class="small-12 columns">
						<div class="home-section section-1">
						<?php the_content(); ?>	
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="small-12 columns">
						<div class="home-section section-2">
							<?php
							$field_data = get_post_meta( get_the_ID(), 'homepage-section2-content', false );
							echo wpautop( $field_data[0] );
							?>	
						</div>
					</div>
				</div>

				<div class="row">
					<div class="small-12 columns">
						<div class="home-section section-3">
							<div class="logo">
								<img src="<?php echo trailingslashit( PXLS_URI ) ?>images/logo.png" alt="TC Facilities Management Logo">
							</div>
							<?php
							$field_data = get_post_meta( get_the_ID(), 'homepage-section3-content', false );
							echo wpautop( $field_data[0] );
							?>	
						</div>
					</div>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>	

		<div class="row">
			<div class="small-12 columns">
				<div class="home-services" data-equalizer>
					<div class="row">
						<div class="small-12 medium-4 columns">
							<div class="home-service service-cleaning has-button" data-equalizer-watch>
								<img src="<?php echo trailingslashit( PXLS_URI ) ?>images/logo-cleaning.png" alt="Cleaning Services">
								<?php
								$field_data = get_post_meta( get_the_ID(), 'homepage-cleaning-content', false );
								echo wpautop( $field_data[0] );
								?>	
								<div class="button-container">								
									<a href="http://www.tcfm.co.uk/service/cleaning/" class="button home-button">Read more</a>
								</div>
							</div>
						</div>
						<div class="small-12 medium-4 columns">
							<div class="home-service service-security has-button" data-equalizer-watch>
								<img src="<?php echo trailingslashit( PXLS_URI ) ?>images/logo-security.png" alt="Security Services">
								<?php
								$field_data = get_post_meta( get_the_ID(), 'homepage-security-content', false );
								echo wpautop( $field_data[0] );
								?>	
								<div class="button-container">								
									<a href="http://www.tcfm.co.uk/service/security/" class="button home-button">Read more</a>
								</div>
							</div>
						</div>
						<div class="small-12 medium-4 columns">
							<div class="home-service service-specialist has-button" data-equalizer-watch>
								<img src="<?php echo trailingslashit( PXLS_URI ) ?>images/logo-specialist.png" alt="Specialist Services">
								<?php
								$field_data = get_post_meta( get_the_ID(), 'homepage-specialist-content', false );
								echo wpautop( $field_data[0] );
								?>	
								<div class="button-container">								
									<a href="http://www.tcfm.co.uk/service/specialist-services/" class="button home-button">Read more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>							
		</div>

		<div class="container">	
			<!--		
			<div class="row" data-equalizer>					

				<div class="small-12 columns" data-equalizer-watch>
					<div class="container has-button home-news">
						<?php 
						$args = array( 'posts_per_page' => 1 );
						$newsposts = get_posts( $args );
						if ( $newsposts ) :
							foreach ( $newsposts as $post ) : setup_postdata( $post );
						?>

								<div class="row">
									<div class="small-12 columns">
										<?php if ( has_post_thumbnail() ) :
											the_post_thumbnail( 'news-item-thumb' );
										endif; ?>
										<h2><?php the_title(); ?></h2>
										<?php echo pxls_excerpt(); ?>
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
			-->
			
			<?php get_template_part( 'parts/tpl-bottom-news', 'front-page' ); ?>

			
		</div>			
								

		<?php get_template_part( 'parts/tpl-after-all-content', 'front-page' ); ?>
	
	</div>

<?php get_footer();
