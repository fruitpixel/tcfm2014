<?php

function pxls_get_company_telephone() {
	global $PXLS_Options;
	$companyphone = '';
	if ( isset( $PXLS_Options['pxls_company_phone'] ) ) {
		$companyphone = $PXLS_Options['pxls_company_phone'];
	}
    return $companyphone;
}

function pxls_get_company_facebook() {
	global $PXLS_Options;
	$companyfacebook = '';
	if ( isset( $PXLS_Options['pxls_facebook_link'] ) ) {
		$companyfacebook = $PXLS_Options['pxls_facebook_link'];
	}
    return $companyfacebook;
}


function pxls_get_company_linkedin() {
	global $PXLS_Options;
	$companylinkedin = '';
	if ( isset( $PXLS_Options['pxls_linkedin_link'] ) ) {
		$companylinkedin = $PXLS_Options['pxls_linkedin_link'];
	}
    return $companylinkedin;
}


function pxls_get_company_twitter() {
	global $PXLS_Options;
	$companytwitter = '';
	if ( isset( $PXLS_Options['pxls_twitter_link'] ) ) {
		$companytwitter = $PXLS_Options['pxls_twitter_link'];
	}
    return $companytwitter;
}


function pxls_get_company_youtube() {
	global $PXLS_Options;
	$companyyoutube = '';
	if ( isset( $PXLS_Options['pxls_youtube_link'] ) ) {
		$companyyoutube = $PXLS_Options['pxls_youtube_link'];
	}
    return $companyyoutube;
}



