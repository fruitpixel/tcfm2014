<?php
/**
 * sidebars.php
 * 
 * This file registers the sidebars used in the theme
 * 
 * @since 1.0.03
 * @package  PXLS:Framework
 */

// Register widgetized areas
// Can be overridden by child themes
if ( ! function_exists( 'the_sidebars_init' ) ) {

	/**
	 * the_sidebars_init()
	 * 
	 * registers the sidebars used in the theme
	 * 
	 * @since 1.0.03
	 */
	function the_sidebars_init() {
	    if ( ! function_exists( 'register_sidebar' ) )
	        return;
		
		register_sidebar(array( 
			'name' => __( 'Middle Left', 'pxls' ),
			'id' => 'left',
			'description' => __( 'Normal full width Sidebar', 'pxls' ), 
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
			)
		);
		
		register_sidebar(array( 
			'name' => __( 'Middle Right', 'pxls' ),
			'id' => 'right',
			'description' => __( 'Normal full width Sidebar', 'pxls' ), 
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
			)
		);register_sidebar(array( 
			'name' => __( 'Middle Top', 'pxls' ),
			'id' => 'middle-top',
			'description' => __( 'Middle Top widget area.', 'pxls' ), 
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
			)
		);
		
	    register_sidebar(array( 
			'name' => __( 'Middle Bottom', 'pxls' ),
			'id' => 'middle-bottom',
			'description' => __( 'Middle Bottom widget area.', 'pxls' ), 
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
			)
		);
	
	    register_sidebar(array( 
			'name' => __( 'Top', 'pxls' ),
			'id' => 'top',
			'description' => __( 'Full page width widget area', 'pxls' ), 
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
			)
		);
		
		register_sidebar(array( 
			'name' => __( 'Top Left', 'pxls' ),
			'id' => 'top-left',
			'description' => __( 'Left column section of the top - will not show if top widget area is active', 'pxls' ), 
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
			)
		);
		
		register_sidebar(array( 
			'name' => __( 'Top Middle', 'pxls' ),
			'id' => 'top-middle',
			'description' => __( 'Middle column section of the top - will not show if top widget area is active', 'pxls' ), 
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
			)
		);
		
		register_sidebar(array( 
			'name' => __( 'Top Right', 'pxls' ),
			'id' => 'top-right',
			'description' => __( 'Right column section of the top - will not show if top widget area is active', 'pxls' ), 
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
			)
		);
		
		register_sidebar(array( 
			'name' => __( 'Bottom', 'pxls' ),
			'id' => 'bottom',
			'description' => __( 'Full page width widget area', 'pxls' ), 
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
			)
		);
		
		register_sidebar(array( 
			'name' => __( 'Bottom Left', 'pxls' ),
			'id' => 'bottom-left',
			'description' => __( 'Left column section of the bottom - will not show if bottom widget area is active', 'pxls' ), 
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
			)
		);
		
		register_sidebar(array( 
			'name' => __( 'Bottom Middle', 'pxls' ),
			'id' => 'bottom-middle',
			'description' => __( 'Middle column section of the bottom - will not show if bottom widget area is active', 'pxls' ), 
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
			)
		);
		
		register_sidebar(array( 
			'name' => __( 'Bottom Right', 'pxls' ),
			'id' => 'bottom-right',
			'description' => __( 'Right column section of the bottom - will not show if bottom widget area is active', 'pxls' ), 
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
			)
		);
		
	}
}
add_action( 'init', 'the_sidebars_init' );  