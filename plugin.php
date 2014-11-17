<?php
/**
* Plugin Name: CAHNRS Rest Api Extension
* Plugin URI:  http://cahnrs.wsu.edu/communications/
* Description: Adds people content type
* Version:     1.0.0
* Author:      CAHNRS Communications, Danial Bleile
* Author URI:  http://cahnrs.wsu.edu/communications/
* License:     Copyright Washington State University
* License URI: http://copyright.wsu.edu
*/

class CAHNRSWPAPIEXT_init {
	
	public function __construct(){
		if( isset( $_GET['rest-ext'] ) && $_GET['rest-ext'] ){
			add_action( 'template_redirect', array( $this , 'set_redirect') );
		};
	}
	
	public function set_redirect(){
		global $post;
		$site_url = get_site_url();
		\wp_redirect( $site_url.'/wp-json/posts/'.$post->ID );
	}

};

$CAHNRSWPAPIEXT = new CAHNRSWPAPIEXT_init();
?>