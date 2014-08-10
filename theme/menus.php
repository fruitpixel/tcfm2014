<?php

/*
 * pxsl_register_menus
 * 
 * registers the menus
 */
if ( ! function_exists( 'pxls_register_menus' ) ) {
    function pxls_register_menus() {
        // Register our navigation menus
		register_nav_menus( 
			array(
				'primary-menu' => __( 'Primary Navigation', 'pxls' ),
				'footer-menu' => __( 'Footer Navigation', 'pxls' ),
				'sidebar-menu' => __( 'Sidebar Navigation', 'pxls' ),
				'courtesy-menu' => __( 'Courtesy Menu', 'pxls' )
			) 
		);
    }
    add_action( 'init', 'pxls_register_menus' );
}

