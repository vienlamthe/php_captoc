<?php

// current date
$current = date('Y-m-d H:i:s');

// yesterday
$yesterday = date('Y-m-d H:i:s', time() - 60 * 60 * 24);

// format

// current timestamp
echo time();

// parse date => return array
$dateParse = date_parse('2022-10-12');
echo '<pre>';
var_dump($dateParse['year']);
echo '</pre>';