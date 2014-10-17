
		<?php get_template_part( 'parts/tpl-before-footer', get_post_format() ); ?>

		<div class="container">
			<footer>
				<div id="contact" class="page-angled-bg">
					<div class="row">
						<div class="small-12 large-5 columns end">
							<div class="contact-link-container">
								<a href="<?php echo get_permalink_by_slug( 'contact-us', 'page' ); ?>">Get in touch with us</a>
							</div>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-6 columns">
						<div class="footer-menu-container clearfix">
							<?php if ( has_nav_menu( 'footer-menu' ) ) { wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); } ?>
						</div>							
					</div>
						
					<div class="small-6 columns">
						<ul class="social-icons">
							<li class="social-icon social-icon--youtube"><a href="<?php echo pxls_get_company_youtube(); ?>"><img src="<?php echo trailingslashit( PXLS_URI ) ?>images/youtube-icon.png" alt="YouTube"></a></li>
							<li class="social-icon social-icon--facebook"><a href="<?php echo pxls_get_company_facebook(); ?>"><img src="<?php echo trailingslashit( PXLS_URI ) ?>images/facebook-icon.png" alt="Facebook"></a></li>
							<li class="social-icon social-icon--linkedin"><a href="<?php echo pxls_get_company_linkedin(); ?>"><img src="<?php echo trailingslashit( PXLS_URI ) ?>images/linkedin-icon.png" alt="LinkedIn"></a></li>
							<li class="social-icon social-icon--twitter"><a href="<?php echo pxls_get_company_twitter(); ?>"><img src="<?php echo trailingslashit( PXLS_URI ) ?>images/twitter-icon.png" alt="Twitter"></a></li>
						</ul>
					</div>
				</div>
			</footer>
		</div>
		
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53edf02f04a266a8"></script>	

	<script type="text/javascript" src="http://nyc14ny.com/js/27436.js" ></script>
	<noscript><img src="http://nyc14ny.com/images/track/27436.png?trk_user=27436&trk_tit=jsdisabled&trk_ref=jsdisabled&trk_loc=jsdisabled" height="0px" width="0px" style="display:none;" /></noscript>



	<?php wp_footer(); ?>

</body>
</html>