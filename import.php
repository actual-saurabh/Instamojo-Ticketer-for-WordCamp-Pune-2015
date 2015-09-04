<?php
/*
* Template Name: CSV import
*/

populate_data_from_csv();
/**
 * Import csv list to database and send a ticket to them
 *
 * Where will I get field name
 */
function populate_data_from_csv() {

	//This should give a associative array, which can be passed directly
	$attendees = array_map( "str_getcsv", file( get_template_directory() . "/list.csv", FILE_SKIP_EMPTY_LINES ) );
	$keys      = array_shift( $attendees );

	// Get Associative array
	foreach ( $attendees as $i => $row ) {
		//We Need a name atleast
		if ( ! empty( $row[0] ) ) {
			$attendees[ $i ] = array_combine( $keys, $row );
		} else {
			unset( $attendees [ $i ] );
		}
	}
	//We got the data, Insert in db and generate ticket
	foreach ( $attendees as $attendee ) {
		//Run collect
		collect( $attendee );
	}
}

/**
 * Perform all the steps which collect.php does
 *
 * @param $m_fields
 * @param $c_fields
 */
function collect( $schema ) {

	$status = 'Credit';

	/**
	 * Calculate type
	 */
	$schema['type'] = $type = strtoupper( empty( $schema['coupon'] ) ? 'ATND' : substr( $schema['coupon'], 5, 4 ) );
	/**
	 * Generate ticket code
	 */
	$schema['random']            = $random = wp_generate_password( 8, false );
	$schema['tshirt_preference'] = substr( $schema['tshirt_preference'], 0, 1 );
	$tshirt                      = $schema['tshirt_size'] . $schema['tshirt_preference'];
	$schema['code']              = $code = "WCP15" . $type . $tshirt . $random;
	/**
	 * Generate QR code
	 */
	$qr_data = preg_replace( '/-/', '', $code );
// the qr code
	$schema['qr'] = $qr = "http://api.qrserver.com/v1/create-qr-code/?data={$qr_data}";
	/**
	 * Setup some required variables
	 */
	$name  = $schema['name'];
	$email = $schema['email'];
	/**
	 * Insert data into table
	 */
// store in table
	global $wpdb;
	$tbl = $wpdb->prefix;
	$inserted = $wpdb->insert(
		$tbl.'wcp_tickets_copy',
		$schema,
		array(
			'%s', '%s', '%d', '%s', '%s',
			'%s', '%s', '%d', '%s',
			'%s', '%s',
			'%s', '%s', '%d',
			'%s', '%s', '%s', '%s'
		)
	);
// payment has failed, exit before ticket is generated
	if ( $status != 'Credit' ) {
		exit;
	}
	//If no email address, exit
	if ( empty( $schema['email'] ) ) {
		exit;
	}
	/**
	 * Prepare email content
	 */
	$path = '';
	ob_start();
	include_once TEMPLATEPATH . "/email/tpl.php";
	$template = ob_get_clean();
	$result   = $tags = array();
	preg_match_all( '/\[#.+#\]/U', $template, $result );
	$tags    = $result[0];
	$content = $template;
	$tag_var = '';
	$result  = array();

	foreach ( $tags as $tag ) {
		preg_match( '/\[#(.+)#\]/', $tag, $result );
		$tag_var = $result[1];
		$content = preg_replace( "/\[#{$tag_var}#\]/", ${$tag_var}, $content );
	}
	/**
	 * Prepare Email
	 */
	// allow html
	add_filter( 'wp_mail_content_type', 'set_html_content_type' );
	// prepare recipient
	$to = $name . ' <' . $email . '> ';
	//prepare headers
	$headers[] = "From: WordCamp Pune <noreply@wppune.org>";
//$headers[] = "Bcc: punewc2015org@googlegroups.com";
// send mail
	wp_mail( $to, $name . ", your WordCamp Pune 2015 Ticket", $content, $headers );
// remove html mailing
	remove_filter( 'wp_mail_content_type', 'set_html_content_type' );
	/**
	 * helper for setting email content header
	 * @return string
	 */
	function set_html_content_type() {
		return 'text/html';
	}

	include_once trailingslashit( get_stylesheet_directory() ) . '/attendees.php';
}