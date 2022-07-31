<?php

// strlen, length of string

// strpos, position of first occurance of substring

// strrpos, same but last occurance

// strrev, reverse string

// strtolower and upper

// str_replace

// ucwords, uppercase the first character of each word

// str_replace to replace a string with another string in the main string

// substr, give the substring based on indexes

// str_starts_with and str_ends_with

// browser will parse the html tag
$string2 = '<h1>hello</h1>';
// echo $string2;

echo htmlspecialchars($string2);
// can also run javascript in this using <script> tag
// if no want this, use htmlspecialchars, it'll print out the script stuff

printf('%s likes to %s ', 'Alex', 'code');


?>