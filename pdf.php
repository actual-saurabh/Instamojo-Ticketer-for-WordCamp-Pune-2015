<?php

/* 
 * Template Name: PDF 
 * 
 */
// Set parameters
$apikey = '38dc1075-8c32-45e0-b262-f9665b64268e';
$code = !empty($_GET['code']) ? $_GET['code'] : '';
if(empty($code)) exit;
$value = 'http://ticket.wordcamp.wppune.org/ticket/?pdf=1&code=' . $code; // can aso be a url, starting with http..
 
// Convert the HTML string to a PDF using those parameters.  Note if you have a very long HTML string use POST rather than get.  See example #5
$result = file_get_contents("http://api.html2pdfrocket.com/pdf/?apikey=" . urlencode($apikey) . "&value=" . urlencode($value));
 
// Output headers so that the file is downloaded rather than displayed
// Remember that header() must be called before any actual output is sent
header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . strlen($result));
 
// Make the file a downloadable attachment - comment this out to show it directly inside the
// web browser.  Note that you can give the file any name you want, e.g. alias-name.pdf below:
header('Content-Disposition: attachment; filename=' . 'WordCamp Pune 2015 Ticket.pdf' );
 
// Stream PDF to user
echo $result;
