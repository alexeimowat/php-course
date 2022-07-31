<?php
/*
File handling is the ability to read and write files on the server.
PHP has built in functions for reading and writing files
*/

$file = 'extras/users.txt';

if(file_exists($file)) {
    // echo readfile($file);

    /*
    We first need a 'handle', this is like a baton. 
    - we get a handle for the file and open it, saying if we want to read or write it
    - next we read it by passing in the handle and the file size
    - then we close it via the handle
    - can use contents of file from the variable on line 20
    */
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'Alex' . PHP_EOL . 'Tyra' . PHP_EOL . 'Kasper';
    fwrite($handle, $contents);
    fclose($handle);
}
?>