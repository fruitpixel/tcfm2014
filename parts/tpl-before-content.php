<?php
/**
 * tpl-sb-middle-top.php
 * 
 * This displays the 'middle-top' sidebar if active
 * 
 * @since 1.0.03
 * @package  PXLS:Framework
 */
?>

<?php if (pxls_active_sidebar('middle-top')) : ?>
	<div id="sb-middle-top" class="row">
		<?php pxls_sidebar('middle-top'); ?>
	</div>
<?php endif; 
					