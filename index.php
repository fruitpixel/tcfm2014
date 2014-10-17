<?php get_header(); ?>

	<?php get_template_part( 'parts/tpl-nav', '' ); ?>

	<div id="content" class="container">	
		
		<?php get_template_part( 'parts/tpl-before-all-content', '' ); ?>			
		
		<div class="container">			
			<div class="row">
			
				<div class="small-12 columns">
				
					<?php get_template_part( 'parts/tpl-before-content', '' ); ?>
					
					<?php if ( have_posts() ) : ?>
						<?php while(have_posts()) : the_post(); ?>
							<article>
								<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
								<p class="small-date">Published on: <?php the_time(get_option('date_format')); ?></p>
								<?php echo pxls_excerpt(); ?>
								<p><a href="<?php the_permalink(); ?>">[read more]</a></p>
							</article>
						<?php endwhile; ?>
						<?php global $wp_query;
						$big = 999999999; // need an unlikely integer
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
						) );
						?>
					<?php else : ?>
						<article>
							<h2>Not Found</h2>
							<p>We couldn't find what you were looking for...sorry!</p>
						</article>
					<?php endif; ?>

					<?php get_template_part( 'parts/tpl-after-content', '' ); ?>
					
				</div>

			</div>
		</div>
		
		<?php get_template_part( 'parts/tpl-after-all-content', '' ); ?>
	
	</div>

<?php get_footer();
