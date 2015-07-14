<?php
/*
 * Template Name: Process Webhook
 */
/**
 * Receive post request
 * verify mac
 * calculate type
 * Generate ticket code
 * Store in table
 * Generate QR code
 * Use email template
 * Send
 */
/**
 * Receive post request
 */
// check payment status
$status = isset( $_POST[ 'status' ] ) ? $_POST[ 'status' ] : null;

$mac = isset( $_POST[ 'mac' ] ) ? $_POST[ 'mac' ] : null;


$fields = array(
        'name' => 'buyer_name',
        'email' => 'buyer',
        'phone' => 'buyer_phone',
        'coupon' => 'discount_code',
        'payment_id' => 'payment_id'
);


$custom = array(
        'twitter' => 'Field_94389',
        'website' => 'Website',
        'age' => 'Field_49664',
        'gender' => 'Gender',
        'tshirt_preference' => 'T_shirt_Preference',
        'tshirt_size' => 'T_shirt_Size',
        'level' => 'Level_Expertise',
        'role' => 'Primary_Role',
        'party' => 'Field_37819'
);


/*

$types = array(
        'FEML', // Women
        'SENR', // Sr. Citizens
        'ABLE', // Diff. abled
        'STUD', // Students
        'SPKR', // Speakers
        'VOLR', // Volunteeers
        'SPON', // Sponsors
        'ATND', // Others
        'ORGR', // Organisers
);

*/

/**
 * 
 * 
 * @todo Verify mac
 */

$schema = array();

/**
 * Parse needed fields
 */
foreach ( $fields as $id => $val ) {
    $schema[ $id ] = isset( $_POST[ $val ] ) ? $_POST[ $val ] : '';
}



/**
 * Parse Custom Fields
 */
$custom_fields = isset($_POST[ 'custom_fields' ]) ? $_POST[ 'custom_fields' ] : '';

$custom_fields = json_decode(stripslashes($custom_fields), true);
foreach ( $custom as $id => $val ) {
    $schema[ $id ] = isset( $custom_fields[ $val ]['value'] ) ? $custom_fields[ $val ]['value'] : '';
}




/**
 * Calculate type
 */

$schema['type'] = $type = strtoupper(empty( $schema[ 'coupon' ] ) ? 'ATND' : substr( $schema[ 'coupon' ], 5, 4 ));



/**
 * Generate ticket code
 */
$schema['random'] = $random = wp_generate_password( 8, false );

$schema['tshirt_preference'] = substr($schema['tshirt_preference'], 0, 1);
$tshirt = $schema['tshirt_size'] . $schema['tshirt_preference'];

$schema['code'] = $code = "WCP15" . $type . $tshirt . $random;

/**
 * Generate QR code
 */
$qr_data = preg_replace( '/-/', '', $code );

// the qr code
$schema['qr'] = $qr = "http://api.qrserver.com/v1/create-qr-code/?data={$qr_data}";


/**
 * Setup some required variables
 */
$name = $schema['name'];
$email = $schema['email'];

/**
 * Insert data into table
 */



// store in table

global $wpdb;

$tbl = $wpdb->prefix;

$inserted = $wpdb->insert( 
	$tbl.'wcp_tickets', 
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
if ( $status != 'Credit' )
    exit;


/**
 * Prepare email content
 */

$path = '';
ob_start();
include_once TEMPLATEPATH . "/email/tpl.php";
$template = ob_get_clean();

$result = $tags = array();

preg_match_all( '/\[#.+#\]/U', $template, $result );

$tags = $result[ 0 ];


$content = $template;
$tag_var = '';
$result = array();
    
foreach ( $tags as $tag ) {
    preg_match('/\[#(.+)#\]/', $tag, $result);
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
wp_mail( $to, $name.", your WordCamp Pune 2015 Ticket", $content, $headers );

// remove html mailing
remove_filter( 'wp_mail_content_type', 'set_html_content_type' );



/**
 * helper for setting email content header
 * @return string
 */
function set_html_content_type() {
	return 'text/html';
}

include_once trailingslashit( get_stylesheet_directory() ).'/attendees.php';