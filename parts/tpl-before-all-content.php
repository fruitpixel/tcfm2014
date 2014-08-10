<?php
/**
 * tpl-before-all-content.php
 * 
 * This displays the 'top' sidebar if active.
 * If the 'top' sidebar is not active, then we have the opportunity to show 3 smaller side-by-side sidebars instead, each a third of the total width
 * 
 * @since 1.0.03
 * @package  PXLS:Framework
 */
?>

<?php if ( pxls_active_sidebar( 'top' ) || pxls_active_sidebar( 'top-left' ) || pxls_active_sidebar( 'top-middle' ) || pxls_active_sidebar( 'top-right' ) ) : ?>
	<div id="top" class="row">
		<?php if( pxls_active_sidebar( 'top' ) ) { ?>
			<div class="small-12 columns">
				<?php pxls_sidebar( 'top' ); ?>
			</div>
		<?php }	else { ?>
			<div id="top-left" class="small-12 large-4 columns">
				<?php pxls_sidebar( 'top-left' ); ?>
			</div>
			<div id="top-middle" class="small-12 large-4 columns">
				<?php pxls_sidebar( 'top-middle' ); ?>
			</div>
			<div id="top-right" class="small-12 large-4 columns">
				<?php pxls_sidebar( 'top-right' ); ?>
			</div>
		<?php } ?>			
	</div>
<?php endif; 
		