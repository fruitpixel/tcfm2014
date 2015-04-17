<?php
 
error_reporting(E_ALL);
ini_set('display_errors', '1');

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
	'theme/functions.php',
	'theme/custom-meta-boxes.php'	// add custom meta boxes
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
	add_image_size( 'staff-profile', 320, 265, true );
	add_image_size( 'banner-image', 970, 415, true );
	add_image_size( 'accreditation-thumb', 225, 70, false );
	add_image_size( 'contact-us-more-info-image', 460, 218, true );
	add_image_size( 'page-banner', 640, 200, true );

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


/**
 * remove the admin bar from the front end (not admin)
 */
add_filter('show_admin_bar', '__return_false');



if ( ! function_exists( 'pxls_enqueue_css' ) ) {
	/**
	 * pxls_enqueue_css()
	 * 
	 * Enqueue the sites css
	 */
	function pxls_enqueue_css() {
		wp_register_style( 'theme-style', get_stylesheet_directory_uri() . '/css/style.min.css' );	
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

		//wp_deregister_script( 'jquery' );

		//wp_register_script( 'jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", false, '1.11.1', false );
		wp_register_script( 'fastclick', get_template_directory_uri() . '/js/vendor/min/fastclick.min.js', array( 'jquery' ), false, true );
		wp_register_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', array( 'fastclick' ), false, true );
		wp_register_script( 'equalizer', get_stylesheet_directory_uri() . '/js/foundation/min/foundation.equalizer.min.js', array( 'foundation' ), false, true );
		wp_register_script( 'topbar', get_stylesheet_directory_uri() . '/js/foundation/min/foundation.topbar.min.js', array( 'foundation' ), false, true );
		wp_register_script( 'reveal', get_stylesheet_directory_uri() . '/js/foundation/min/foundation.reveal.min.js', array( 'foundation' ), false, true );
		wp_register_script( 'interchange', get_stylesheet_directory_uri() . '/js/foundation/min/foundation.interchange.min.js', array( 'foundation' ), false, true );
		wp_register_script( 'video', '//vjs.zencdn.net/4.6/video.js', array( 'reveal' ), false, true );
		wp_register_script( 'app', get_stylesheet_directory_uri() . '/js/app.js', array( 'video' ), false, true );
		//wp_register_script( 'cycle2', get_template_directory_uri() . '/js/jquery.cycle2.min.js', array( 'app' ), false, true );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'fastclick' );
	    wp_enqueue_script( 'foundation' );
	    wp_enqueue_script( 'equalizer' );
	    wp_enqueue_script( 'topbar' );
	    wp_enqueue_script( 'interchange' );
	    wp_enqueue_script( 'video' );
		wp_enqueue_script( 'app' );
	    //wp_enqueue_script( 'cycle2' );
	}
}
add_action( 'wp_enqueue_scripts', 'pxls_enqueue_js' );



function metaslider_htmloutput($html, $slide, $settings) {

	$slidesrc = $slide['src'];
	if ( is_ssl() ) {
		$slidesrc = str_replace( 'http://', 'https://', $slidesrc );
	}

	$html = "<img src='" . $slidesrc . "' height='" . $slide['height'] . "' width='" . $slide['width'] . "' alt='" . $slide['alt'] . "' class='" . $slide['class'] . "' draggable='false'>";
	if ( $slide['url'] ) {
		$slideurl = $slide['url'];
		if ( is_ssl() ) {
			$slideurl = str_replace( 'http://', 'https://', $slideurl );
		}
		if ( $slide['title'] ) {
			$html .= "<a href='" . $slideurl . "' target='" . $slide['target'] . "'>" . $slide['title'] . "</a>";
		}
		else{
			$html .= "<a href='" . $slideurl . "' target='" . $slide['target'] . "'>Read more</a>";
		}
	}
	if ( $slide['caption'] ) {
		$html .= "<div class='caption-wrap'>";
			$html .= "<div class='caption'>" . $slide['caption'] . "</div>";
		$html .= "</div>";
	}

    return $html;
}
add_filter('metaslider_image_flex_slider_markup', 'metaslider_htmloutput', 10, 3);







function remove_blog_slug( $wp_rewrite ) {

	// check multisite and main site
	if ( ! is_main_site() )
		return;

	// set checkup
	$rewrite = FALSE;

	// update_option
	$wp_rewrite->permalink_structure = preg_replace( '!^(/)?blog/!', '$1', $wp_rewrite->permalink_structure );
	update_option( 'permalink_structure', $wp_rewrite->permalink_structure );

	// update the rest of the rewrite setup
	$wp_rewrite->author_structure = preg_replace( '!^(/)?blog/!', '$1', $wp_rewrite->author_structure );
	$wp_rewrite->date_structure = preg_replace( '!^(/)?blog/!', '$1', $wp_rewrite->date_structure );
	$wp_rewrite->front = preg_replace( '!^(/)?blog/!', '$1', $wp_rewrite->front );

	// walk through the rules
	$new_rules = array();
	foreach ( $wp_rewrite->rules as $key => $rule )
		$new_rules[ preg_replace( '!^(/)?blog/!', '$1', $key ) ] = $rule;
	$wp_rewrite->rules = $new_rules;

	// walk through the extra_rules
	$new_rules = array();
	foreach ( $wp_rewrite->extra_rules as $key => $rule )
		$new_rules[ preg_replace( '!^(/)?blog/!', '$1', $key ) ] = $rule;
	$wp_rewrite->extra_rules = $new_rules;

	// walk through the extra_rules_top
	$new_rules = array();
	foreach ( $wp_rewrite->extra_rules_top as $key => $rule )
		$new_rules[ preg_replace( '!^(/)?blog/!', '$1', $key ) ] = $rule;
	$wp_rewrite->extra_rules_top = $new_rules;

	// walk through the extra_permastructs
	$new_structs = array();
	foreach ( $wp_rewrite->extra_permastructs as $extra_permastruct => $struct ) {
		$struct[ 'struct' ] = preg_replace( '!^(/)?blog/!', '$1', $struct[ 'struct' ] );
		$new_structs[ $extra_permastruct ] = $struct;
	}
	$wp_rewrite->extra_permastructs = $new_structs;
} 
add_action( 'generate_rewrite_rules', 'remove_blog_slug' );



class themeslug_walker_nav_menu extends Walker_Nav_Menu {
  
	// add classes to ul sub-menus
	function start_lvl( &$output, $depth = 0, $args = array() ) {
	    // depth dependent classes
	    $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
	    $display_depth = ( $depth + 1); // because it counts the first submenu as 0
	    $classes = array(
	        'sub-menu',
	        'dropdown',
	        ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
	        ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
	        'menu-depth-' . $display_depth
	        );
	    $class_names = implode( ' ', $classes );
	  
	    // build html
	    $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
	}
	  
	// add main/sub classes to li's and links
	 function start_el(  &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
	    global $wp_query;
	    $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
	  
	    // depth dependent classes
	    $depth_classes = array(
	        ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
	        ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
	        ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
	        'menu-item-depth-' . $depth
	    );
	    $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
	  
	    // passed classes
	    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
	    $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
	  
	    // build html
	    $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
	  
	    // link attributes
	    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
	    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
	    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
	    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
	    $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
	  
	    $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
	        $args->before,
	        $attributes,
	        $args->link_before,
	        apply_filters( 'the_title', $item->title, $item->ID ),
	        $args->link_after,
	        $args->after
	    );
	  
	    // build html
	    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}


function fix_ssl_attachment_url( $url ) {

	if ( is_ssl() )
		$url = str_replace( 'http://', 'https://', $url );
	return $url;

}
add_filter( 'wp_get_attachment_url', 'fix_ssl_attachment_url' );



