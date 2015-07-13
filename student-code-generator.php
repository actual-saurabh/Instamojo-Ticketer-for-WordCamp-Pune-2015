<?php

/*
 * Template name: Student code generator
 */
$prefix = 'WCP15STUD';
$count = isset($_GET[ 'count' ])? intval($_GET['count']):1;
for ( $i = 0; $i < $count; $i ++  ) {
    $random = wp_generate_password( 6, false );
    $code = $prefix . $random;
    echo $code . "<br>";
}