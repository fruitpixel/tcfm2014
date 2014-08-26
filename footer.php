
		<?php get_template_part( 'parts/tpl-before-footer', get_post_format() ); ?>

		<div class="container">
			<footer>
				<div class="row">
					<div class="small-12 large-6 columns">
						<div class="row">
							<div class="small-12 columns">
								<div class="footer-menu-container clearfix">
									<?php if ( has_nav_menu( 'footer-menu' ) ) { wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); } ?>
								</div>							
							</div>
						</div>
						
					</div>
						
					<div class="small-12 large-6 columns">

					</div>

			
				</div>
			</footer>
		</div>
			

	<?php wp_footer(); ?>

</body>
</html>