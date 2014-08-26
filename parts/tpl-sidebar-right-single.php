
<div class="sidebar-outercontainer">
	<div class="sidebar-container">
		<div class="sidebar-content" data-equalizer-watch>



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
					<?php endforeach; ?>
				</div>
						
			<?php endif; ?>


			<div class="sidebar-item">
				<div class="row">
					<div class="small-12 columns">
						<h1 class="twitter-title">Latest tweets</h1>
						<?php echo do_shortcode('[twitter-feed username="Tcfacilitiesmgt" followlink="no" followbutton="no" img="no" conditional="no" phptime="d.m.y" tweetintent="no" num="2" ulclass="twitter-updates" liclass="tweetli" smalltimeclass="tweettime"]'); ?>
					</div>
				</div>
			</div>

				
		</div>
	</div>	
</div>
				