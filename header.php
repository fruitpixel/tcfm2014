<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame Remove this if you use the .htaccess -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<script src="<?php echo trailingslashit( PXLS_URI ) ?>js/vendor/modernizr.js"></script>
<!--
	<link href='//fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
-->

	<?php wp_head(); ?>
    
	<?php get_template_part( 'parts/tpl-head-ie', get_post_format() ); ?>

	<script>
(function(){
    function addFont() {
        var style = document.createElement('style');
        style.rel = 'stylesheet';
        document.head.appendChild(style);
        style.textContent = localStorage.ralewayFont;
    }

    try {
        if (localStorage.ralewayFont) {
            // The font is in localStorage, we can load it directly
            addFont();
        } else {
            // We have to first load the font file asynchronously
            var request = new XMLHttpRequest();
            request.open('GET', '<?php echo trailingslashit( PXLS_URI ) ?>font/raleway.woff.css', true);

            request.onload = function() {
                if (request.status >= 200 && request.status < 400) {
                    // We save the file in localStorage
                    localStorage.ralewayFont = request.responseText;

                    // ... and load the font
                    addFont();
                }
            }

            request.send();
        }
    } catch(ex) {
        // maybe load the font synchronously for woff-capable browsers
        // to avoid blinking on every request when localStorage is not available
    }
}());
</script>
<noscript>
	<link href='//fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
</noscript>

</head>

<body <?php body_class(); ?>> 
	
		<header>
			<div class="container">
				<div class="row">
					<div class="small-12 large-2 columns">
						<div class="row show-for-medium-only">
							<div class="medium-2 columns">
								<div class="logo">
			                        <a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo trailingslashit( PXLS_URI ) ?>images/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
								</div>
							</div>
							<div class="medium-10 columns">
								<div class="row hide-for-small">
									<div class="small-12 medium-7 columns">
										<div class="phone-container">
											 <p>Call us on <span><?php echo pxls_get_company_telephone(); ?></span></p>
										</div>
									</div>
									<div class="small-12 medium-5 columns">
										<div class="courtesy-container">
											 <?php if ( has_nav_menu('courtesy-menu') ) { wp_nav_menu( array('theme_location' => 'courtesy-menu' ) ); } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row hide-for-medium-only">
							<div class="small-12 columns">
								<div class="logo">
			                        <a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo trailingslashit( PXLS_URI ) ?>images/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
								</div>
							</div>
						</div>
					</div>
					<div class="small-12 large-10 columns">
						<div class="row hide-for-medium hide-for-small">
							<div class="small-12 medium-7 columns">
								<div class="phone-container">
									 <p>Call us on <span><?php echo pxls_get_company_telephone(); ?></span></p>
								</div>
							</div>
							<div class="small-12 medium-5 columns">
								<div class="courtesy-container">
									 <?php if ( has_nav_menu('courtesy-menu') ) { wp_nav_menu( array('theme_location' => 'courtesy-menu' ) ); } ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
								<?php get_template_part( 'parts/tpl-nav', 'header' ); ?>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
		</header>	

		



		