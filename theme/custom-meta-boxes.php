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
function homepage_metaboxes( array $meta_boxes ) {

    $fields = array(
        array(
            'id'   => 'homepage-section2-content',
            'name' => 'Section 2',
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 5
            )
        ),
        array(
            'id'   => 'homepage-section3-content',
            'name' => 'Section 3',
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 5
            )
        ),

        array(
            'id'   => 'homepage-cleaning-content',
            'name' => 'Cleaning Services',
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 5
            )
        ),
        array(
            'id'   => 'homepage-security-content',
            'name' => 'Security Services',
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 5
            )
        ),
        array(
            'id'   => 'homepage-specialist-content',
            'name' => 'Specialist Services',
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 5
            )
        ),
    );

    $meta_boxes[] = array(
        'title'    => 'Sections',
        'pages'    => 'page',
        'show_on'  => array( 'id' => array( 2 ) ),
        'context'  => 'normal',
        'priority' => 'high',
        'fields'   => $fields // an array of fields - see individual field documentation.
    );

    return $meta_boxes; 
}
add_filter( 'cmb_meta_boxes', 'homepage_metaboxes' );