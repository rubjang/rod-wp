<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( !isset($wp_did_header) ) {

	$wp_did_header = true;

	require_once( dirname(__FILE__) . '/wp-load.php' );

	wp();

/*

ABSPATH    			= 	root/wp-config.php
ABSPATH . WPINC     =   root/wp-includes/template-loader.php

*/
	require_once( ABSPATH . WPINC . '/template-loader.php' );

}
