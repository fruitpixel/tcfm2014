<?php
/**
 * tpl-after-all-content.php
 * 
 * This displays the '' sidebar if active.
 * If the 'bottom' sidebar is not active, then we have the opportunity to show 3 smaller side-by-side sidebars instead, each a third of the total width
 * 
 * @since 1.0.03
 * @package  PXLS:Framework
 */
?>

<?php if ( pxls_active_sidebar( 'bottom' ) || pxls_active_sidebar( 'bottom-left' ) || pxls_active_sidebar( 'bottom-middle' ) || pxls_active_sidebar( 'bottom-right' ) ) : ?>
	<div id="bottom" class="row">
		<?php if( pxls_active_sidebar( 'bottom' ) ) { ?>
			<div class="small-12 columns">
				<?php pxls_sidebar( 'bottom' ); ?>
			</div>
		<?php }	else { ?>
			<div id="bottom-left" class="small-12 large-4 columns">
				<?php pxls_sidebar( 'bottom-left' ); ?>
			</div>
			<div id="bottom-middle" class="small-12 large-4 columns">
				<?php pxls_sidebar( 'bottom-middle' ); ?>
			</div>
			<div id="bottom-right" class="small-12 large-4 columns">
				<?php pxls_sidebar( 'bottom-right' ); ?>
			</div>
		<?php } ?>			
	</div>
<?php endif; 