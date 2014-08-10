<?php

function pxls_theme_settings( $sections ) {

	$sections[] = array(
		'icon' => PXLS_OPTIONS_URL.'img/glyphicons/glyphicons_029_notes_2.png',
		'title' => __('Company Info', 'pxls-opts'),
		'desc' => __('', 'pxls-opts'),
		'fields' => array(			

			array(
				'id' => 'pxls_company_phone', //must be unique
				'type' => 'text', //the field type
				'title' => __('Company Phone Number', 'pxls-opts'),
				'sub_desc' => __("Will show at the top and bottom of the screen", 'pxls-opts'),
				'desc' => __('', 'pxls-opts'),
				'std' => __('', 'pxls-opts')
			),
			array(
				'id' => 'pxls_company_email', //must be unique
				'type' => 'text', //the field type
				'title' => __('Company Email Address', 'pxls-opts'),
				'sub_desc' => __("Will show at the bottom of the screen", 'pxls-opts'),
				'desc' => __('', 'pxls-opts'),
				'std' => __('', 'pxls-opts')
			),
			array(
				'id' => 'pxls_company_logo', //must be unique
				'type' => 'upload', //the field type
				'title' => __('Company Logo', 'pxls-opts'),
				'sub_desc' => __("Upload your image.<br/>(TIP - Don't remove the 'link' field!)", 'pxls-opts'),
				'desc' => __('', 'pxls-opts')
			)
		)
	);

	
	$sections[] = array(
		'icon' => PXLS_OPTIONS_URL.'img/glyphicons/glyphicons_044_keys.png',
		'title' => __('Login Screen', 'pxls-opts'),
		'desc' => __('', 'pxls-opts'),
		'fields' => array(
			array(
				'id' => 'pxls_login_logo', //must be unique
				'type' => 'upload', //the field type
				'title' => __('Login Logo', 'pxls-opts'),
				'sub_desc' => __("Upload an image to display on the login screen.<br/>(TIP - Don't remove the 'link' field!)", 'pxls-opts'),
				'desc' => __('', 'pxls-opts'),
				'std' => ''
			),
			array(
				'id' => 'pxls_login_logo_url', //must be unique
				'type' => 'text', //the field type
				'title' => __('Login Logo Link', 'pxls-opts'),
				'sub_desc' => __("Website address linked to when clicking on the logo on the login screen.", 'pxls-opts'),
				'validate' => 'url',
				'desc' => __('', 'pxls-opts'),
				'std' => __('', 'pxls-opts')
			)
		)
	);


	$sections[] = array(
		'icon' => PXLS_OPTIONS_URL.'img/glyphicons/glyphicons_092_tint.png',
		'title' => __('Scheme', 'pxls-opts'),
		'desc' => __('', 'pxls-opts'),
		'fields' => array(
			array(
				'id' => 'background_color', //must be unique
				'type' => 'select', //the field type
				'title' => __('Background', 'pxls-opts'),
				'sub_desc' => __("Select the background image to use", 'pxls-opts'),
				'desc' => __('', 'pxls-opts'),
				'options' => array(
					'' => __('None', 'pxls-opts'),
					'energise' => __('Energise', 'pxls-opts'), 
					'bark' => __('Bark', 'pxls-opts'),
					'deep-sea' => __('Deep Sea', 'pxls-opts'),
					'earth' => __('Earth', 'pxls-opts'),
					'eggshell' => __('Eggshell', 'pxls-opts'),
					'fawn' => __('Fawn', 'pxls-opts'),
					'fern' => __('Fern', 'pxls-opts'),
					'limestone' => __('Limestone', 'pxls-opts'),
					'mushroom' => __('Mushroom', 'pxls-opts'),
					'olive' => __('Olive', 'pxls-opts'),
					'sand' => __('Sand', 'pxls-opts'),
					'sedona' => __('Sedona', 'pxls-opts'),
					'stormy-sky' => __('Stormy Sky', 'pxls-opts')
					),
				'std' => '0'
			)
		)
	);

return $sections;

}

add_filter('pxls-opts-sections-pxls', 'pxls_theme_settings', 1);