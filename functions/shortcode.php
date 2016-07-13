<?php
function hcrm_remindme_func(){


	//Form spam control and debug declaration
	if(!session_id()) {
		session_start();
	}
	$wprm_form_token = md5(uniqid('auth', true));
	$_SESSION['wprm_form_token'] = $wprm_form_token;

	$wprm_return = 	'the form html';
	return $wprm_return;

}

// Add shortcode functionality
add_shortcode( 'hcrm_remindme', 'hcrm_remindme_func' );
?>