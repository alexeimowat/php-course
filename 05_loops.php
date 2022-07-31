<?php
// for loops
// for ($x = 0; $x <= 10; $x++) {
    // echo $x;
// }

// while loops
// $x = 1;
// while ($x <= 15) {
//     echo 'Number: ' . $x . '<br>';
//     $x++; 
// }

// do while loop
// $x = 1;
// do {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// } while($x <= 5);

$myArray = ['First', 'Second', 'Third'];

// for ($x = 0; $x < count($myArray); $x++) {
//     echo $myArray[$x];
// }

// Key here is the array goes first and the item that is the current iteration goes next
// foreach($myArray as $item) {
//     echo $item;
// }

// foreach($myArray as $i => $item) {
//     echo $i;
// }

// Can also use as associative array, so we can have
$person = [
    'Name' => 'Alex',
    'Age' => 26,
    'Email' => 'alex@gmail.com'
];

foreach($person as $key => $value) {
    echo "$key:  $value<br>";  
}
?>