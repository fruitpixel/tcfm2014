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
 * homepage_metaboxes
 * 
 * adds meta boxes to the homepage
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



/**
 * single_service_metaboxes
 * 
 * adds meta boxes to the service post type
 */
function single_service_metaboxes( array $meta_boxes ) {

    $fields = array(
        array( 
            'id'       => 'tcfm-service-slide', 
            'name'     => '', 
            'desc'     => 'Slider sits at the top of the page. If no slider selected, the "Featured Image" will be shown instead.',
            'type'     => 'post_select', 
            'use_ajax' => true,
            'query'    => array (
                'post_type' => 'ml-slider'
            )
        )
    );
    $meta_boxes[] = array(
        'title'    => 'Slider',
        'pages'    => 'service',
        'context'  => 'side',
        'priority' => 'default',
        'fields'   => $fields // an array of fields - see individual field documentation.
    );


    $fields = array(
        array(
            'id'   => 'tcfm-service-logo', 
            'name' => '', 
            'desc' => 'The service logo sits to the left of the slider, or just above in a narrow window.',
            'type' => 'image', 
        )
    );
    $meta_boxes[] = array(
        'title'    => 'Service Logo',
        'pages'    => 'service',
        'context'  => 'side',
        'priority' => 'default',
        'fields'   => $fields // an array of fields - see individual field documentation.
    );


    $fields = array(
        array(
            'id'   => 'tcfm-service-section2-content',
            'name' => 'Section 2',
            'type' => 'wysiwyg',
            'options' => array(
                'textarea_rows' => 5
            )
        ),

    );
    $meta_boxes[] = array(
        'title'    => 'Sections',
        'pages'    => 'service',
        'context'  => 'normal',
        'priority' => 'high',
        'fields'   => $fields // an array of fields - see individual field documentation.
    );


    $fields = array(
        array(
            'id'   => 'tcfm-service-service1-heading',
            'name' => 'Heading',
            'type' => 'text',
        ),
        array(
            'id'   => 'tcfm-service-service1-content',
            'name' => 'Description',
            'type' => 'textarea',
            'rows' => 6,
        ),

    );
    $meta_boxes[] = array(
        'title'    => 'Service Offered 1',
        'pages'    => 'service',
        'context'  => 'normal',
        'priority' => 'high',
        'fields'   => $fields // an array of fields - see individual field documentation.
    );


    $fields = array(
        array(
            'id'   => 'tcfm-service-service2-heading',
            'name' => 'Heading',
            'type' => 'text',
        ),
        array(
            'id'   => 'tcfm-service-service2-content',
            'name' => 'Description',
            'type' => 'textarea',
            'rows' => 6,
        ),

    );
    $meta_boxes[] = array(
        'title'    => 'Service Offered 2',
        'pages'    => 'service',
        'context'  => 'normal',
        'priority' => 'high',
        'fields'   => $fields // an array of fields - see individual field documentation.
    );


    $fields = array(
        array(
            'id'   => 'tcfm-service-service3-heading',
            'name' => 'Heading',
            'type' => 'text',
        ),
        array(
            'id'   => 'tcfm-service-service3-content',
            'name' => 'Description',
            'type' => 'textarea',
            'rows' => 6,
        ),

    );
    $meta_boxes[] = array(
        'title'    => 'Service Offered 3',
        'pages'    => 'service',
        'context'  => 'normal',
        'priority' => 'high',
        'fields'   => $fields // an array of fields - see individual field documentation.
    );


    $fields = array(
        array(
            'id'   => 'tcfm-service-service4-heading',
            'name' => 'Heading',
            'type' => 'text',
        ),
        array(
            'id'   => 'tcfm-service-service4-content',
            'name' => 'Description',
            'type' => 'textarea',
            'rows' => 6,
        ),

    );
    $meta_boxes[] = array(
        'title'    => 'Service Offered 4',
        'pages'    => 'service',
        'context'  => 'normal',
        'priority' => 'high',
        'fields'   => $fields // an array of fields - see individual field documentation.
    );


    $fields = array(
        array(
            'id'   => 'tcfm-service-service5-heading',
            'name' => 'Heading',
            'type' => 'text',
        ),
        array(
            'id'   => 'tcfm-service-service5-content',
            'name' => 'Description',
            'type' => 'textarea',
            'rows' => 6,
        ),

    );
    $meta_boxes[] = array(
        'title'    => 'Service Offered 5',
        'pages'    => 'service',
        'context'  => 'normal',
        'priority' => 'high',
        'fields'   => $fields // an array of fields - see individual field documentation.
    );


    $fields = array(
        array(
            'id'   => 'tcfm-service-service6-heading',
            'name' => 'Heading',
            'type' => 'text',
        ),
        array(
            'id'   => 'tcfm-service-service6-content',
            'name' => 'Description',
            'type' => 'textarea',
            'rows' => 6,
        ),

    );
    $meta_boxes[] = array(
        'title'    => 'Service Offered 6',
        'pages'    => 'service',
        'context'  => 'normal',
        'priority' => 'high',
        'fields'   => $fields // an array of fields - see individual field documentation.
    );

    return $meta_boxes; 
}
//add_filter( 'cmb_meta_boxes', 'single_service_metaboxes' );

