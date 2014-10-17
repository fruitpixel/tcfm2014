<?php get_header( 'page' ); ?>

	<?php get_template_part( 'parts/tpl-nav', 'page' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', 'page' ); ?>			
		
		<div class="container">			
			<div class="row">
			
				<div class="small-12 columns">
				
					<?php get_template_part( 'parts/tpl-before-content', 'page' ); ?>
					
					<?php if ( have_posts() ) : ?>
						<?php while( have_posts() ) : the_post(); ?>
							<?php
							$show_featured_image = pods_field( 'page', get_the_ID(), 'show_featured_image' );
							$bannerimg = pods_field( 'page', get_the_ID(), 'featured_image_banner' );							
							?>

							<div id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?> data-equalizer>
								<div class="small-12 medium-8 columns" data-equalizer-watch>
									<?php if ( $show_featured_image && $show_featured_image[0] === "1" ) : ?>
										<div class="page-banner <?php if ( $bannerimg && $bannerimg[0] !== "1"  && has_post_thumbnail() ) echo 'has-post-thumbnail'; ?>">
											<?php if ( $bannerimg && $bannerimg[0] !== "1"  && has_post_thumbnail() ) :
												the_post_thumbnail( 'page-banner' );
											endif; ?>
											<h1><?php the_title(); ?></h1>
										</div>
									<?php else : ?>
										<h1><?php the_title(); ?></h1>
									<?php endif; ?>
									<div class="post-content">

										<?php the_content(); ?>
									</div>										
								</div>
								<div class="small-12 medium-4 columns">
									<?php get_template_part( 'parts/tpl-sidebar-right', 'page' ); ?>
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
					
					<?php get_template_part( 'parts/tpl-after-content', 'page' ); ?>
					
				</div>
				
			</div>

		</div>
		
		<?php get_template_part( 'parts/tpl-after-all-content', 'page' ); ?>
	
	</div>

<?php get_footer( 'page' );
