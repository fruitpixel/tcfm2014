<?php
			$args = array(
			        'posts_per_page'   => 2,
			        'post_type'        => 'post'
			    );
			$testimonial_posts = get_posts( $args );
			?>

			<div id="bottom-news-container" class="">

				<div class="row">
					<div class="small-12 columns">
						<h1 class="bottom-news-title">Latest news and updates</h1>
					</div>
				</div>

				<div class="news-items">
					<div class="row" data-equalizer>
						<div class="small-12 large-4 columns">
							<?php if ( $testimonial_posts ) : $post = $testimonial_posts[0]; setup_postdata( $post ); ?>
								<div class="news-item" data-equalizer-watch>
									<h2 class="news-item-headline"><?php the_title(); ?></h2>
									<div class="content">
										<?php echo pxls_excerpt( 30 ); ?>
									</div>								
									<div class="button-container">								
										<a href="<?php the_permalink(); ?>" class="button home-button">Read more</a>
									</div>
								</div>
							<?php endif; ?>
						</div>

						<div class="small-12 large-4 columns">
							<div class="latest-tweets" data-equalizer-watch>
								<?php echo do_shortcode('[twitter-feed username="Tcfacilitiesmgt" followlink="no" followbutton="no" img="no" conditional="no" phptime="d.m.y" tweetintent="no" num="2" ulclass="twitter-updates" liclass="tweetli" smalltimeclass="tweettime"]'); ?>
							</div>
						</div>

						<div class="small-12 large-4 columns">
							<?php if ( $testimonial_posts && count( $testimonial_posts ) > 1 ) : $post = $testimonial_posts[1]; setup_postdata( $post ); ?>
								<div class="news-item" data-equalizer-watch>
									<h2 class="news-item-headline"><?php the_title(); ?></h2>
									<div class="content">
										<?php echo pxls_excerpt( 30 ); ?>
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
