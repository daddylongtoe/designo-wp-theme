<?php

add_action(
	'wp_enqueue_scripts',
	function() {
		wp_enqueue_script( 'admin-ajax', get_stylesheet_directory_uri() . '/assets/js/admin-ajax.js', '', '', true );
	}
);

function process_contact_form() {
	wp_send_json_success( array( $_REQUEST ) );
}

add_action( 'wp_ajax_send_contact_form', 'process_contact_form' );
add_action( 'wp_ajax_nopriv_send_contact_form', 'process_contact_form' );
