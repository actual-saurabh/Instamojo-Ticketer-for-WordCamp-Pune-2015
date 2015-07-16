<?php
/* 
 * Template Name: Gravatar Fetcher
 */

$size = $_GET['size'];
$email = $_GET['email'];

$gravatar = get_avatar( $email, $size, 'wavatar', ucwords( $attendee->name ) );
echo $gravatar;
echo '<input type="text" value="'.$gravatar.'">';

