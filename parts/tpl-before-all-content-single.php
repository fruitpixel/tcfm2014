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
				the_post_thumbnail( 'full' );
				echo '</div>';
			}
		}
		?>
	</div>
</div>