<div class="row">
	<div class="small-12 columns">
		<?php 
		$slider = pods_field( 'slider' );
		if ( $slider ) {
			echo do_shortcode( "[metaslider id=" . $slider['ID'] . "]" ); 
		}
		else {
			$show_featured_image = pods_field( 'page', get_the_ID(), 'show_featured_image' );
			$bannerimg = pods_field( 'page', get_the_ID(), 'featured_image_banner' );							
			if ( $show_featured_image && $show_featured_image[0] === "1" && $bannerimg && $bannerimg[0] === "1" ) {
				if ( has_post_thumbnail() ) {
					echo '<div class="post-thumbnail">';
					the_post_thumbnail( 'banner-image' );
					echo '</div>';
				}
			}
		}
		?>
	</div>
</div>