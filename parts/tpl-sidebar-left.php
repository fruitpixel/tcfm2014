<?php
/**
 * tpl-sb-left.php
 * 
 * This displays the 'left' sidebar if active
 * 
 * @since 1.0.03
 * @package  PXLS:Framework
 */


if ( pxls_active_sidebar( 'left' ) ) : ?>
	<div id="column-1" class="small-12 large-3 columns <?php echo pxls_active_sidebar( 'right' ) ? 'pull-6' : 'pull-9' ?>">
		<?php pxls_sidebar( 'left' ); ?>
	</div>
<?php endif;

				