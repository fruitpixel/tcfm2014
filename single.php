<?php get_header(); ?>

	<?php get_template_part( 'parts/tpl-nav', 'single' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', 'single' ); ?>			
		
		<div class="container">			
			<div class="row">
			
				<div class="small-12 columns">
				
					<?php get_template_part( 'parts/tpl-before-content', 'single' ); ?>
					
					<?php if ( have_posts() ) : ?>
						<?php while( have_posts() ) : the_post(); ?>
							<div id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?> data-equalizer>
								<div class="small-12 medium-8 columns" data-equalizer-watch>
									<h1 class="post-title"><?php the_title(); ?></h1>
									<?php the_content(); ?>

									
								</div>
								<div class="small-12 medium-4 columns">
									<?php get_template_part( 'parts/tpl-sidebar-right', 'single' ); ?>
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
					
					<?php get_template_part( 'parts/tpl-after-content', 'single' ); ?>
					
				</div>
			</div>

			<div class="page-angled-bg">
				<div class="row">
					<div class="small-12 columns">
					
						<div class="row">
							<div class="small-12 medium-8 columns end">
								<div class="share-article-container">
									<img src="<?php echo trailingslashit( PXLS_URI ) ?>images/icon-share.png" alt="Share Article">

									<h1>Share this article</h1>

									<!-- Go to www.addthis.com/dashboard to customize your tools -->
									<div class="addthis_sharing_toolbox"></div>
									
								</div>									
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		
		<?php get_template_part( 'parts/tpl-after-all-content', 'single' ); ?>
	
	</div>

<?php get_footer();
