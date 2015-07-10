<?php
/*
 * Template name: Student code generator
 */
$prefix = 'WCP15STUD';
$random = wp_generate_password(6, false);
$code = $prefix.$random;
echo $code;

