<?php get_header(); ?>

	<?php get_template_part( 'parts/tpl-nav', 'single-service' ); ?>

	<div id="content" class="container">	
		
		<div class="container">
			<div class="row">
				<div class="small-12 columns">
					<div class="single-service-logo-slide-container">
						<div class="row" data-equalizer>
							<div class="small-12 medium-3 columns">
								<div class="single-service-logo-container">
									<?php
									$image_id = get_post_meta( get_the_ID(), 'tcfm-service-logo', true ); 
									if ( $image_id ) { 
										$img = wp_get_attachment_image_src( $image_id, 'full', false );
										if ( $img[0] != '' ) {
											?>
											<img src="<?php echo $img[0]; ?>" alt="Service Logo">
										<?php }
									} ?>
								</div>
							</div>
							<div class="small-12 medium-9 columns">
								<?php 
								$slider_id = get_post_meta( get_the_ID(), 'tcfm-service-slide', true );
								if ( $slider_id ) {
									echo '<div class="single-service-slider-container" data-equalizer-watch>';
									echo do_shortcode( "[metaslider id=" . $slider_id . "]" );
									echo '</div>';
								}
								else {
									if ( has_post_thumbnail() ) {
										echo '<div class="single-service-post-thumbnail post-thumbnail" data-equalizer-watch>';
										the_post_thumbnail( 'banner-image' );
										echo '</div>';
									}
								}
								?>
							</div>
						</div>
									
					</div>
				</div>
			</div>
		</div>		
		
		<?php if ( have_posts() ) : ?>
			<?php while( have_posts() ) : the_post(); ?>

				<div class="container">			
					<div class="row">			
						<div class="small-12 columns">
							<div class="single-service-section-1">
								<?php the_content(); ?>
							</div>
						</div>				
					</div>
				</div>

				<div class="container">			
					<div class="row">			
						<div class="small-12 columns">
							<div class="single-service-section-2">
								<?php
								$field_data = get_post_meta( get_the_ID(), 'tcfm-service-section2-content', false );
								echo wpautop( $field_data[0] );
								?>	
							</div>
						</div>				
					</div>
				</div>

				<?php 
				$terms = get_the_terms( get_the_ID(), 'servicesectors' );
				if ( $terms && ! is_wp_error( $terms ) ) : ?>
					<div class="container">			
						<div class="row">			
							<div class="small-12 columns">
								<div class="single-service-sectors">
									<h2>The sectors we operate in include :</h2>
									<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-6">
										<?php foreach ( $terms as $term ) { ?>

											<li>
												<img src="<?php echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name; ?> Icon">
												<h3><?php echo $term->name; ?></h3>
											</li>

										<?php } ?>

									</ul>
								</div>
							</div>				
						</div>
					</div>
				<?php endif; ?>


				<div class="container">			
					<div class="row">			
						<div class="small-12 columns">
							<div class="single-service-services-offered">
								<h2>Services offered</h2>
								<ul class="small-block-grid-1 medium-block-grid-3" data-equalizer>
									<li>
										<div class="single-service-service-offered service-1" data-equalizer-watch>
											<?php
											$heading = get_post_meta( get_the_ID(), 'tcfm-service-service1-heading', false );
											$content = get_post_meta( get_the_ID(), 'tcfm-service-service1-content', false );
											if ( ! empty( $heading ) ) {
												echo '<h4>' . sanitize_text_field( $heading[0] ) . '</h4>';
											}
											if ( ! empty( $content ) ) {
												echo '<p>' . sanitize_text_field( $content[0] ) . '</p>';
											}											
											?>	
										</div>
									</li>
									<li>
										<div class="single-service-service-offered service-2" data-equalizer-watch>
											<?php
											$heading = get_post_meta( get_the_ID(), 'tcfm-service-service2-heading', false );
											$content = get_post_meta( get_the_ID(), 'tcfm-service-service2-content', false );
											if ( ! empty( $heading ) ) {
												echo '<h4>' . sanitize_text_field( $heading[0] ) . '</h4>';
											}
											if ( ! empty( $content ) ) {
												echo '<p>' . sanitize_text_field( $content[0] ) . '</p>';
											}											
											?>	
										</div>
									</li>
									<li>
										<div class="single-service-service-offered service-3" data-equalizer-watch>
											<?php
											$heading = get_post_meta( get_the_ID(), 'tcfm-service-service3-heading', false );
											$content = get_post_meta( get_the_ID(), 'tcfm-service-service3-content', false );
											if ( ! empty( $heading ) ) {
												echo '<h4>' . sanitize_text_field( $heading[0] ) . '</h4>';
											}
											if ( ! empty( $content ) ) {
												echo '<p>' . sanitize_text_field( $content[0] ) . '</p>';
											}											
											?>	
										</div>
									</li>
								</ul>
								<ul class="small-block-grid-1 medium-block-grid-3" data-equalizer>
									<li>
										<div class="single-service-service-offered service-4" data-equalizer-watch>
											<?php
											$heading = get_post_meta( get_the_ID(), 'tcfm-service-service4-heading', false );
											$content = get_post_meta( get_the_ID(), 'tcfm-service-service4-content', false );
											if ( ! empty( $heading ) ) {
												echo '<h4>' . sanitize_text_field( $heading[0] ) . '</h4>';
											}
											if ( ! empty( $content ) ) {
												echo '<p>' . sanitize_text_field( $content[0] ) . '</p>';
											}											
											?>	
										</div>
									</li>
									<li>
										<div class="single-service-service-offered service-5" data-equalizer-watch>
											<?php
											$heading = get_post_meta( get_the_ID(), 'tcfm-service-service5-heading', false );
											$content = get_post_meta( get_the_ID(), 'tcfm-service-service5-content', false );
											if ( ! empty( $heading ) ) {
												echo '<h4>' . sanitize_text_field( $heading[0] ) . '</h4>';
											}
											if ( ! empty( $content ) ) {
												echo '<p>' . sanitize_text_field( $content[0] ) . '</p>';
											}											
											?>	
										</div>
									</li>
									<li>
										<div class="single-service-service-offered service-6" data-equalizer-watch>
											<?php
											$heading = get_post_meta( get_the_ID(), 'tcfm-service-service6-heading', false );
											$content = get_post_meta( get_the_ID(), 'tcfm-service-service6-content', false );
											if ( ! empty( $heading ) ) {
												echo '<h4>' . sanitize_text_field( $heading[0] ) . '</h4>';
											}
											if ( ! empty( $content ) ) {
												echo '<p>' . sanitize_text_field( $content[0] ) . '</p>';
											}											
											?>	
										</div>
									</li>
								</ul>
							</div>
						</div>				
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

		<div class="container form-container">	
			<div class="row">
				<div class="small-12 columns">
					<div class="more-info-container">
						<?php echo do_shortcode( '[gravityform id="1" name="Want more information?" ajax="true"]' ); ?>
					</div>	
				</div>
			</div>
		</div>


		<div class="container">
			<?php get_template_part( 'parts/tpl-bottom-news', 'single-service' ); ?>
		</div>
		
		<?php get_template_part( 'parts/tpl-after-all-content', 'single-service' ); ?>
	
	</div>

<?php get_footer();
