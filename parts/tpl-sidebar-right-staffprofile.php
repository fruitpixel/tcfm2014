
<div class="sidebar-outercontainer">
	<div class="sidebar-container">
		<div class="sidebar-content" data-equalizer-watch>
			<?php if ( has_post_thumbnail() ) : 
				echo get_the_post_thumbnail( get_the_ID(), 'staff-profile' ); 
			else : ?>
				<img src="<?php echo trailingslashit( PXLS_URI ) ?>images/generic-profile-pic.png" alt="No profile image">
			<?php endif; ?>


				<?php
				$pod = pods( 'staff_profile', get_the_ID() );
				$twitter = $pod->field( 'twitter' );
				$linkedin = $pod->field( 'linkedin' );
				$facebook = $pod->field( 'facebook' );
				$google = $pod->field( 'google' );
				if ( $twitter || $linkedin || $facebook || $google ) : ?>

					<div class="sidebar-item sidebar-social-media">
						<div class="row">
							<div class="small-12 columns">
								<h1 class="connect-title">Connect with me</h1>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
								<p>My social media profiles are listed below:</p>
								<ul class="sidebar-social-icons">
									<?php if ( $facebook ) : ?>
										<li><a href="<?php echo $facebook; ?>" title="Facebook" target="_blank"><img src="<?php echo trailingslashit( PXLS_URI ) ?>images/sidebar-social-facebook.png" alt="Facebook" /></a></li>
									<?php endif; ?>
									<?php if ( $twitter ) : ?>
										<li><a href="<?php echo $twitter; ?>" title="Twitter" target="_blank"><img src="<?php echo trailingslashit( PXLS_URI ) ?>images/sidebar-social-twitter.png" alt="Twitter" /></a></li>
									<?php endif; ?>
									<?php if ( $google ) : ?>
										<li><a href="<?php echo $google; ?>" title="Google+" target="_blank"><img src="<?php echo trailingslashit( PXLS_URI ) ?>images/sidebar-social-google.png" alt="Google+" /></a></li>
									<?php endif; ?>
									<?php if ( $linkedin ) : ?>
										<li><a href="<?php echo $linkedin; ?>" title="LinkedIn" target="_blank"><img src="<?php echo trailingslashit( PXLS_URI ) ?>images/sidebar-social-linkedin.png" alt="LinkedIn" /></a></li>
									<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>

				<?php endif; ?>

				<?php if ( $twitter && preg_match( "|https?://(www\.)?twitter\.com/(#!/)?@?([^/]*)|", $twitter, $matches ) == 1 ) : $twitterhandle = $matches[3]; ?>
					<?php if ( $twitterhandle ) : ?>
						<div class="sidebar-item">
							<div class="row">
								<div class="small-12 columns">
									<h1 class="twitter-title">Latest tweets</h1>
									<?php echo do_shortcode('[twitter-feed username="' . $twitterhandle . '" followlink="no" followbutton="no" img="no" conditional="no" phptime="d.m.y" tweetintent="no" num="2" ulclass="twitter-updates" liclass="tweetli" smalltimeclass="tweettime"]'); ?>
								</div>
							</div>
						</div>
					<?php endif; ?>
				<?php endif; ?>
				
		</div>
	</div>	
</div>
				