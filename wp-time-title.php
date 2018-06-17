<?php

/*
Plugin Name: WP Time Title
Description: Add the datatime to the post title
Author: Matt Thiessen
Version: 1.0
Author URI: https://matt.thiessen.us/
*/



function tt_time_title( $data, $postarr ) {
	if($data['post_type'] == 'post') {
		if( empty( $data['post_title'] ) ) {
			$data['post_title'] = date('g:iA F j, Y'); // 7:49PM June 6, 2018
		}
	}
		
	return $data;
}
add_filter( 'wp_insert_post_data', 'tt_time_title', '99', 2 );