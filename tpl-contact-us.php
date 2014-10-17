<?php 

/*
Template Name: ContactUs
*/


get_header(); ?>

	<?php get_template_part( 'parts/tpl-nav', 'contact-us' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', 'contact-us' ); ?>			
		
		<div class="container">			
			<div class="row">
			
				<div class="small-12 columns">
				
					<?php get_template_part( 'parts/tpl-before-content', 'contact-us' ); ?>
					
					<?php if ( have_posts() ) : ?>
						<?php while(have_posts()) : the_post(); ?>
							<div id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?>>
								<div class="small-12 columns">
									<h1><?php the_title(); ?></h1>
									<?php the_content(); ?>
								</div>
							</div>
						<?php endwhile; ?>
						<?php rewind_posts(); ?>
					<?php else : ?>
						<div class="row">
							<div class="small-12 columns">
								<h2>Not Found</h2>
								<p>We couldn't find what you were looking for...sorry!</p>
							</div>
						</div>
					<?php endif; ?>
				
					<div class="contact-info-container">
						<div class="row" data-equalizer>

							<div class="small-12 medium-6 columns">
								<div class="contact-info contact-info-phone-email" data-equalizer-watch>
									<div class="contact-info-icon">
										<div class="contact-info-icon-speechbubble"></div>
									</div>
									<div class="contact-info-content">
										<p>For immediate assistance call us on<br/>
										<span>01737 814016</span><br/>
										or email<br/>
										<span>info@tcfm.co.uk</span></p>
									</div>
								</div>
							</div>

							<div class="small-12 medium-6 columns">
								<div class="contact-info contact-info-address" data-equalizer-watch>
									<div class="contact-info-icon">
										<div class="contact-info-icon-map"></div>
									</div>
									<div class="contact-info-content">
										<p>Sapphire House<br/>
										74/76 Walton Street<br/>
										Walton on the Hill<br/>
										Tadworth<br/>
										Surrey KT20 7RU</p>
									</div>
								</div>
							</div>

						</div>
					</div>

					<?php while(have_posts()) : the_post(); ?>
						<div class="contact-us-more-info-container" data-equalizer>
							<div class="row">
								<div class="small-12 medium-6 columns">
									<div class="contact-us-more-info-text" data-equalizer-watch>
										<p><?php the_field( 'more_info_text' ); ?></p>
									</div>
								</div>

								<div class="small-12 medium-6 columns">
									<?php 
									$image = get_field('more_info_image');
									$size = 'contact-us-more-info-image';
									$thumb = $image['sizes'][$size];
									?>
									<div class="contact-us-more-info-image" data-equalizer-watch data-interchange="[<?php echo $image['url']; ?>, (default)]">

										<div class="show-for-small-only">
											<img src="<?php echo $thumb; ?>" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>


					<div class="map-container">
						<div class="row">
							<div class="small-12 columns">
								<?php //echo do_shortcode('[wpgmza id="1"]'); ?>
								<img class="receptiom-image" src="<?php echo trailingslashit( PXLS_URI ) ?>images/reception.jpg" alt="Reception">
							</div>
						</div>
					</div>

					
						
						

					
					<?php get_template_part( 'parts/tpl-after-content', 'contact-us' ); ?>
					
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
		
		<?php get_template_part( 'parts/tpl-after-all-content', 'contact-us' ); ?>
	
	</div>

<?php get_footer();
