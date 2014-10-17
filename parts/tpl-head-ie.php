<?php
/**
 * tpl-head-ie.php
 * 
 * Conditional stuff for ie8 and below
 * 
 * @since 1.0.03
 * @package  PXLS:Framework
 */
?>

<!-- IE specific styles, fix for HTML5 Tags & media queries -->
<!--[if lt IE 9]>		
	<link rel="stylesheet" href="<?php echo trailingslashit( PXLS_URI ) ?>css/ie.css" />
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="<?php echo trailingslashit( PXLS_URI ) ?>javascripts/response.min.js"></script>
<![endif]-->
