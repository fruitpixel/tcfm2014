<?php get_header(); ?>

	<?php get_template_part( 'parts/tpl-nav', '404' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', '404' ); ?>			
		
		<div id="middle" class="container">			
			<div class="row">
			
				<div id="column-2" class="<?php pxls_contentcolumn_width_classes(); ?>">
				
					<?php get_template_part( 'parts/tpl-before-content', '404' ); ?>
					
						<div class="row">
							<div class="small-15 fifteen columns">
								<h2>Not Found</h2>
								<p>We couldn't find what you were looking for...sorry!</p>
							</div>
						</div>
					
					<?php get_template_part( 'parts/tpl-after-content', '404' ); ?>
					
				</div>
				
				<?php get_template_part( 'parts/tpl-sidebar-left', '404' ); ?>

				<?php get_template_part( 'parts/tpl-sidebar-right', '404' ); ?>

			</div>
		</div>
		
		<?php get_template_part( 'parts/tpl-after-all-content', '404' ); ?>
	
	</div>

<?php get_footer();
