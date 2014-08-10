<?php
/**
 * tpl-sb-right.php
 * 
 * This displays the 'right' sidebar if active
 * 
 * @since 1.0.03
 * @package  PXLS:Framework
 */
?>

<?php if ( pxls_active_sidebar( 'right' ) ) : ?>
	<div id="column-3" class="small-12 large-3 columns">
		<?php pxls_sidebar( 'right' ); ?>
	</div>
<?php endif; 
				