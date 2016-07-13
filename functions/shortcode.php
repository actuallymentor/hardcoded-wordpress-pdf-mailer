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
			<input placeholder="Your Email" class="col l12 m12 s12 left" type="text" name="email" id="hcrmemail"/>
			<input class="btn col l6 offset-l3 m8 offset-m2 s12 left" type="submit" name="submit" id="hcrmsubmit" value="Get PDF" />
			<input id="hcrmchecker" type="hidden" name="checker" value="' . $hcrm_form_token . '" hidden>
		</form>
	</div>
	';

}

// Add shortcode functionality
add_shortcode( 'hcrm_remindme', 'hcrm_remindme_func' );
?>