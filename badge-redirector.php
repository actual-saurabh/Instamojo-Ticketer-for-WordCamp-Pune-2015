<?php
/* 
 * Template Name: Redirector 
 */
$type = isset( $_GET['type'] ) ? $_GET['type'] : '';

$url = 'https://pune.wordcamp.org/2015/';

switch ( $type ) {
    case 'speaker':
        $url .= 'speakers/';
        break;
    case 'organiser':
        $url .= 'organisers/';
        break;
    case 'supporter':
    case 'attendee':
    case 'sponsor':
    default:
        $url .='tickets/';
        break;
}
wp_redirect($url);
