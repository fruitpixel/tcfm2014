
<div class="row">
	<div class="small-12 columns">
		<nav class="breadcrumbs" role="navigation" aria-label="breadcrumbs">
		    <li role="menuitem"><a href="/services/">Services</a></li>
		    <?php if ( have_posts() ) : ?>
				<?php while( have_posts() ) : the_post(); ?>
		    		<li role="menuitem" class="current"><?php the_title(); ?></li>
		    	<?php endwhile; ?>
		    	<?php rewind_posts(); ?>
			<?php endif; ?>
		</nav>
	</div>
</div>
<div class="row">
	<div class="small-12 columns">
		<?php 
		$slider = pods_field( 'slider' );
		if ( $slider ) {
			echo do_shortcode( "[metaslider id=" . $slider['ID'] . "]" ); 
		}
		else {
			if ( has_post_thumbnail() ) {
				echo '<div class="post-thumbnail">';
				the_post_thumbnail( 'banner-image' );
				echo '</div>';
			}
		}
		?>
	</div>
</div>


