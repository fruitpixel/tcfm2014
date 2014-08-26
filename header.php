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
	<meta name="description" content="<?php bloginfo( 'description' ) ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<script src="<?php echo trailingslashit( PXLS_URI ) ?>js/vendor/modernizr.js"></script>
	
	<?php wp_head(); ?>
    
	<?php get_template_part( 'parts/tpl-head-ie', get_post_format() ); ?>

</head>

<?php $class = pxls_get_background_color(); ?>
<body <?php body_class( $class ); ?>> 
	
		<header>
			<div class="container">
				<div class="row">
					<div class="small-12 medium-2 columns">
						<div id="logo">
	                        <?php if ( pxls_get_company_logo() ) : ?>
								<a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo pxls_get_company_logo(); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
	                        <?php else : ?>
	                        	<span id="header-logo-type"><a href="<?php echo home_url('/'); ?>"><?php bloginfo( 'name' ); ?></a></span>
	                        <?php endif; ?>
						</div>
					</div>
					<div class="small-12 medium-10 columns">
						<div class="row hide-for-small">
							<div class="small-12 medium-6 columns">
								<div id="phone-container">
									 <p>Call us on <span><?php echo pxls_get_company_telephone(); ?></span></p>
								</div>
							</div>
							<div class="small-12 medium-6 columns">
								<div id="courtesy-container">
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

		



		