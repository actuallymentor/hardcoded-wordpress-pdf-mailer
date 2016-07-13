<?php
function hcrm_remindme_func(){

	// Spam security
	if(!session_id()) {
		session_start();
	}
	$hcrm_form_token = md5(uniqid('auth', true));
	$_SESSION['hcrm_form_token'] = $hcrm_form_token;

	//Include vars
	return '
	<div id="hcrmform">
		<form accept-charset="utf-8">
			<input placeholder="Your Email" class="col l6 m6 s12 left" type="text" name="email" id="hcrmemail"/>
			<input class="btn col l5 offset-l1 m5 offset-m1 s12 left" type="submit" name="submit" id="hcrmsubmit" value="Get PDF" />
			<input id="hcrmchecker" type="hidden" name="checker" value="' . $hcrm_form_token . '" hidden>
		</form>
	</div>
	';

}

// Add shortcode functionality
add_shortcode( 'hcrm_remindme', 'hcrm_remindme_func' );
?>