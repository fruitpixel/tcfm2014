<div class="row">
	<div class="small-12 columns">
		<nav class="breadcrumbs" role="navigation" aria-label="breadcrumbs">
		    <li role="menuitem"><a href="/services/">Services</a></li>
		    <?php if ( have_posts() ) : ?>
				<?php while( have_posts() ) : the_post(); ?>
					<?php 
					$pod = pods( 'case_study', get_the_id() );
					$service =  $pod->field( 'service' );
					if ( $service ) : ?>
							<li role="menuitem"><a href="<?php echo get_permalink( $service["ID"] ); ?>"><?php echo $service["post_title"] ?></a></li>
					<? endif; ?>
		    		<li role="menuitem" class="current">Case study</li>
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