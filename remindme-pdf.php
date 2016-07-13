<?php
/**
 * Plugin Name: Send me this article
 * Plugin URI: https://github.com/actuallymentor/hardcoded-wordpress-pdf-mailer
 * Description: Send a visitor the post they are reading, and subscribe them to sendy.
 * Version: 0.0.1
 * Author: Mentor Palokaj
 * Author URI: https://www.skillcollector.com
 * License: MIT
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


include( __DIR__ . '/functions/shortcode.php');

if( $_GET['hcrm_sub'] ) {
	include( __DIR__ . '/functions/actor.php');
}



?>