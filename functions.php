<?php
 
// bootstrap the framework
require_once( 'framework/pxls.php' );
new PXLS();

/* -----------------------------------------------------------------------------------
 * load the theme files, including support for overriding in a child theme.
 * ----------------------------------------------------------------------------------- */
$includes = array(
	'theme/options.php',	// theme options
	'theme/menus.php',		// register the theme menu areas
	'theme/sidebars.php',	// register the theme sidebars
);

// Allow child themes/plugins to add widgets to be loaded.
$includes = apply_filters( 'pxls_theme_includes', $includes );

foreach ( $includes as $i ) {
	locate_template( $i, true );
}



/**
 * outputs the required classes for the content column (#column-2), depending ont he configuration of the left and right sidebars.
 * @return [type] [description]
 */
function pxls_contentcolumn_width_classes() {
	if( pxls_active_sidebar( 'right' ) || pxls_active_sidebar( 'left' ) ) {
		if ( pxls_active_sidebar( 'right' ) && pxls_active_sidebar( 'left' ) ) {
			echo 'push-3 large-6 columns'; 
		}
		else{
			if ( pxls_active_sidebar( 'left' ) ) { echo 'push-3 '; }
			echo 'large-9 columns'; 
		}
	}
	else{
		echo 'small-12 columns'; 
	}
}


if ( ! function_exists( 'set_theme_name' ) ) {
	/**
	 * pxls_set_theme_name()
	 * 
	 * Sets the theme name as a global option setting
	 */
	function set_theme_name() {
		$pxls_theme_name = 'TCFM';
		if ( get_option( 'pxls_themename' ) != $pxls_theme_name ) {
			update_option( 'pxls_themename', $pxls_theme_name );
		}
	}
}
add_action( 'init', 'set_theme_name', 10 );


/**
 * pxls_setup()
 * 
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function pxls_setup() {

	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );

	// Adding extra bespoke images sizes
	add_image_size( 'home-news-thumb', 144, 209, true );
	add_image_size( 'news-item-thumb', 298, 133, true );
	add_image_size( 'services-item-thumb', 298, 165, true );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// add support for the html5 search form
	add_theme_support( 'html5', array( 'search-form' ) );

	// add support for infinite scroll (jetpack function)
	add_theme_support( 'infinite-scroll', array(
	    'container' => 'infinite-scroll',
	    'footer' => false,
	) );

	// set the default content width 
	if ( !isset( $content_width ) )
		$content_width = 960;

	// Make theme available for translation
	// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'pxls', get_stylesheet_directory() . '/languages' );

	$locale = get_locale();
	$locale_file = get_stylesheet_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

}
add_action( 'after_setup_theme', 'pxls_setup' );



if ( ! function_exists( 'pxls_enqueue_css' ) ) {
	/**
	 * pxls_enqueue_css()
	 * 
	 * Enqueue the sites css
	 */
	function pxls_enqueue_css() {
		wp_register_style( 'fonts', "//fonts.googleapis.com/css?family=Raleway:400,300,700" );
		wp_register_style( 'foundation-style', get_template_directory_uri() . '/css/foundation.css', array('fonts') );
		wp_register_style( 'video-style', '//vjs.zencdn.net/4.6/video-js.css', array('foundation-style') );
		wp_register_style( 'theme-style', get_stylesheet_directory_uri() . '/css/style.css', array('video-style') );	
		wp_enqueue_style( 'opensans' );
		wp_enqueue_style( 'foundation-style' );
		wp_enqueue_style( 'video-style' );
		wp_enqueue_style( 'theme-style' );
	}
}
add_action( 'wp_enqueue_scripts', 'pxls_enqueue_css' );




if ( ! function_exists( 'pxls_enqueue_js' ) ) {
	/**
	 * pxls_enqueue_js()
	 * 
	 * Enqueue the sites javascripts
	 */
	function pxls_enqueue_js() {

		wp_register_script( 'fastclick', get_template_directory_uri() . '/js/vendor/fastclick.js' );
		wp_register_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', array( 'fastclick' ), false, true );
		wp_register_script( 'equalizer', get_stylesheet_directory_uri() . '/js/foundation/foundation.equalizer.js', array( 'foundation' ), false, true );
		wp_register_script( 'reveal', get_stylesheet_directory_uri() . '/js/foundation/foundation.reveal.js', array( 'foundation' ), false, true );
		wp_register_script( 'video', '//vjs.zencdn.net/4.6/video.js', array( 'reveal' ), false, true );
		wp_register_script( 'app', get_stylesheet_directory_uri() . '/js/app.js', array( 'video' ), false, true );
		wp_register_script( 'cycle2', get_template_directory_uri() . '/js/jquery.cycle2.min.js', array( 'app' ), false, true );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'fastclick' );
	    wp_enqueue_script( 'foundation' );
	    wp_enqueue_script( 'equalizer' );
	    wp_enqueue_script( 'video' );
		wp_enqueue_script( 'app' );
	    wp_enqueue_script( 'cycle2' );
	}
}
add_action( 'wp_enqueue_scripts', 'pxls_enqueue_js' );



function metaslider_append_pinit_button($html, $slide, $settings) {

	$html = "<img src='" . $slide['src'] . "' height='" . $slide['height'] . "' width='" . $slide['width'] . "' alt='" . $slide['alt'] . "' class='" . $slide['class'] . "' draggable='false'>";
	$html .= "<a href='" . $slide['url'] . "' target='" . $slide['target'] . "'>" . $slide['title'] . "</a>";
	$html .= "<div class='caption-wrap'>";
		$html .= "<div class='caption'>" . $slide['caption'] . "</div>";
	$html .= "</div>";

    return $html;
}
add_filter('metaslider_image_flex_slider_markup', 'metaslider_append_pinit_button', 10, 3);











