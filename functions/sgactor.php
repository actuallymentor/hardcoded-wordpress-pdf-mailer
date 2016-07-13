<?php

if(!session_id()) {
	session_start();
}
if ( !($_SESSION['hcrm_form_token'] == $_POST['checker']) ) {
	die("No thanks hax0r " .$_SESSION['hcrm_form_token'] . ' ' . $_POST['checker']);
	session_destroy();
}
session_destroy();

$theemail = "
<p>Hello!</p>

<p>Thanks for being a Skill Collector reader. You rock ;)</p>

<p>To download your PDF click here: <a href='" . $_POST['url'] . "?pdf=fbciaurb6sdaf'>" . $_POST['sj'] . " </a>. When the page loads it will take a second or two before the PDF starts downloading.</p>

<p>Have a great day!</p>

<p>
	Mentor Palokaj<br>
	<a href='https://www.skillcollector.com'>Skill Collector</a>
</p>
";

require( __DIR__ . '/../sg/sendgrid-php.php');
$configs = include_once( __DIR__ . '/hcrm_config.php' );

$from = new SendGrid\Email("Mentor", "mentor@skillcollector.com");
$subject = "PDF of " . $_POST['sj'];
$to = new SendGrid\Email("Reader", $_POST['email']);
$content = new SendGrid\Content("text/html", $theemail);
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = $configs['api'];
$sg = new \SendGrid($apiKey);
$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();

?>