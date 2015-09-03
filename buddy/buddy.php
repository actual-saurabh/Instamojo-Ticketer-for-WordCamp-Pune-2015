<?php

/*
 * Template Name: Buddy
 */

if ( !defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly

if ( !is_user_logged_in() )
	die( 'You are not supposed to be here' );

global $wpdb;
$table = $wpdb->prefix . 'wcp_tickets';

$levels = $wpdb->get_results( 'SELECT DISTINCT level FROM ' . $table );

foreach ( $levels as $level ) {
	$level	 = $level->level;
	$tickets = $wpdb->get_results( 'SELECT ticket_id FROM ' . $table . ' WHERE level = "' . $level . '" AND (buddy IS NULL OR buddy="")' );

	if ( count( $tickets ) < 3 ) {
		echo '<br/>Less than 3 tickets without buddies for level ' . $level;
		continue;
	}
	$last_ticket	 = false;
	$first_ticket	 = false;
	foreach ( $tickets as $ticket ) {
		if ( $last_ticket ) {
			$wpdb->update( $table, array( 'buddy' => $last_ticket ), array( 'ticket_id' => $ticket->ticket_id ) );
		} else {
			$first_ticket = $ticket->ticket_id;
		}
		$last_ticket = $ticket->ticket_id;
	}
	$wpdb->update( $table, array( 'buddy' => $last_ticket ), array( 'ticket_id' => $first_ticket ) );
	echo '<br/>Buddies assigned for level ' . $level;
}

