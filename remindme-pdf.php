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

wp_enqueue_script( 'hcrm-js', plugin_dir_url( __FILE__ ) . '/functions/actor.js', ['jquery'], '1.0.0', true );

if ( isset( $_GET['pdf'] ) ) {
	wp_enqueue_script( 'hcrm-pdf-js', plugin_dir_url( __FILE__ ) . '/functions/download-pdf.js', ['jquery'], '1.0.0', true );
}


?>