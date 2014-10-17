
<div class="sidebar-outercontainer">
	<div class="sidebar-container">
		<div class="sidebar-content" data-equalizer-watch>

			<?php
			$pod = pods( 'services_cpt', get_the_id() );
			$service = $pod->field( 'case_study' );
			
			if ( $service ) : $id = $service["ID"]; $post = get_post( $id ); setup_postdata( $post ); ?>
				<div class="sidebar-item">
					<div class="row">
						<div class="small-12 columns">
							<h1 class="casestudy-title">Case study</h1>
						</div>
					</div>
					<div class="row">
						<div class="small-12 columns">
							<div class="casestudy">
								<h2 class="title"><?php echo get_the_title( $id ); ?></h2>
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
				