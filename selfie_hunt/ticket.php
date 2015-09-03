<?php
/*
 * Template Name: Selfie
 */

/**
 * Generates and assigns selfie hunt quests
 * @global WPDB $wpdb
 */
function generate_selfie_hunt($ticket_id = 122){
	global $wpdb;
	
	$selfie_clues_table = $wpdb->prefix.'wcp_sh_clues';
	$selfie_relations_table = $wpdb->prefix.'wcp_sh_tickets';
	
	$common_text = 'Find someone who ';
	$query = "SELECT * FROM $selfie_clues_table AS clues INNER JOIN $selfie_relations_table AS relations ON clues.clue_id = relations.clue_id WHERE relations.ticket_id=$ticket_id";
	
	$existing = $wpdb->get_results($query);
	
	//Return if clues already assigned
	if(count($existing)>0){
		$questions = array();
		foreach ($existing as $question){
			$questions[] = $common_text.lcfirst($question->clue);
		}
		return $questions;
	}
	
	$spon_clues = $wpdb->get_results('SELECT * FROM '.$selfie_clues_table.' WHERE type = "SPON" ORDER BY RAND() LIMIT 0,1 ');
	$comp_clues = $wpdb->get_results('SELECT * FROM '.$selfie_clues_table.' WHERE type = "COMP" ORDER BY RAND() LIMIT 0,1 ');
	$fsw_clues = $wpdb->get_results('SELECT * FROM '.$selfie_clues_table.' WHERE type = "FSW" ORDER BY RAND() LIMIT 0,2 ');
	
	$questions_array = array();
	$questions_array[] = $spon_clues[0];
	$questions_array[] = $comp_clues[0];
	$questions_array[] = $fsw_clues[0];
	$questions_array[] = $fsw_clues[1];
	
	
	$questions = array();
	
	foreach($questions_array as $question){
		$questions[] = $common_text.lcfirst($question->clue);
		$wpdb->insert($selfie_relations_table, array('ticket_id'=>$ticket_id, 'clue_id' => $question->clue_id));
	}
	return $questions;
}

include_once trailingslashit( get_stylesheet_directory() ).'/selfie_email.php';