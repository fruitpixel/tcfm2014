<?php
/**
 * custom-meta-boxes.php
 *
 * Contains code to add custom meta boxes (!) to post types / templates etc.
 * 
 * @since 2.0.0
 * @package PXLS WordPress Theme
 */




/**
 * page_metaboxes
 * 
 * adds meta boxes to all 'page' post type objects
 */
function page_metaboxes( array $meta_boxes ) {

    $fields = array(
        array(
            'id'   => 'page-strap-content',
            'name' => '',
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 5
            )

        ),
    );

    $meta_boxes[] = array(
        'title'    => 'Page Headline',
        'pages'    => 'page',
        'context'  => 'normal',
        'priority' => 'high',
        'fields'   => $fields // an array of fields - see individual field documentation.
    );

    return $meta_boxes; 
}
add_filter( 'cmb_meta_boxes', 'page_metaboxes' );