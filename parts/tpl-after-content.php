<?php
/**
 * tpl-sb-middle-bottom.php
 * 
 * This displays the 'middle-bottom' sidebar if active
 * 
 * @since 1.0.03
 * @package  PXLS:Framework
 */
?>

<?php if (pxls_active_sidebar('middle-bottom')) : ?>
	<div id="sb-middle-bottom" class="row">
		<?php pxls_sidebar('middle-bottom'); ?>
	</div>
<?php endif;

					