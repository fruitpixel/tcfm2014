<?php

function pxls_theme_settings( $sections ) {

	$newsection = array(
        'title' => __( 'Social Accounts', 'pxls' ),
        'desc' => __( '', 'pxls' ),
        'icon'   => 'el-icon-link',
        'fields' => array(
            array(
                'id' => 'pxls_twitter_link', //must be unique
                'type' => 'text', //the field type
                'title' => __('Twitter', 'pxls-opts'),
                'subtitle' => __("", 'pxls-opts'),
                'desc' => __('', 'pxls-opts'),
            ),
            array(
                'id' => 'pxls_facebook_link', //must be unique
                'type' => 'text', //the field type
                'title' => __('Facebook', 'pxls-opts'),
                'subtitle' => __("", 'pxls-opts'),
                'desc' => __('', 'pxls-opts'),
            ),
            array(
                'id' => 'pxls_linkedin_link', //must be unique
                'type' => 'text', //the field type
                'title' => __('LinkedIn', 'pxls-opts'),
                'subtitle' => __("", 'pxls-opts'),
                'desc' => __('', 'pxls-opts'),
            ),
            array(
                'id' => 'pxls_google_link', //must be unique
                'type' => 'text', //the field type
                'title' => __('Google+', 'pxls-opts'),
                'subtitle' => __("", 'pxls-opts'),
                'desc' => __('', 'pxls-opts'),
            ),
            array(
                'id' => 'pxls_youtube_link', //must be unique
                'type' => 'text', //the field type
                'title' => __('YouTube', 'pxls-opts'),
                'subtitle' => __("", 'pxls-opts'),
                'desc' => __('', 'pxls-opts'),
            ),
            array(
                'id' => 'pxls_vimeo_link', //must be unique
                'type' => 'text', //the field type
                'title' => __('Vimeo', 'pxls-opts'),
                'subtitle' => __("", 'pxls-opts'),
                'desc' => __('', 'pxls-opts'),
            ),
            array(
                'id' => 'pxls_instagram_link', //must be unique
                'type' => 'text', //the field type
                'title' => __('Instagram', 'pxls-opts'),
                'subtitle' => __("", 'pxls-opts'),
                'desc' => __('', 'pxls-opts'),
            ),
            array(
                'id' => 'pxls_flickr_link', //must be unique
                'type' => 'text', //the field type
                'title' => __('Flickr', 'pxls-opts'),
                'subtitle' => __("", 'pxls-opts'),
                'desc' => __('', 'pxls-opts'),
            )
        )
    );
	array_unshift( $sections, $newsection );

	$newsection = array(
        'title' => __('Company Info', 'pxls-opts'),
        'desc' => __('', 'pxls-opts'),
        'icon' => 'el-icon-home',
        'fields' => array(           
            array(
                'id' => 'pxls_company_phone', //must be unique
                'type' => 'text', //the field type
                'title' => __('Company Phone Number', 'pxls-opts'),
                'subtitle' => __("", 'pxls-opts'),
                'desc' => __('', 'pxls-opts'),
            ),
            array(
                'id' => 'pxls_company_email', //must be unique
                'type' => 'text', //the field type
                'title' => __('Company Email Address', 'pxls-opts'),
                'subtitle' => __("", 'pxls-opts'),
                'desc' => __('', 'pxls-opts'),
            ),
            array(
                'id' => 'pxls_company_logo', //must be unique
                'type' => 'media', //the field type
                'title' => __('Company Logo', 'pxls-opts'),
                'subtitle' => __('', 'pxls-opts'),
                'desc' => __("Upload your image.<br/>(TIP - Don't remove the 'link' field!)", 'pxls-opts')
            )
        )
    );
	array_unshift( $sections, $newsection );

    return $sections;

}

add_filter('redux/options/PXLS_Options/sections', 'pxls_theme_settings', 1);