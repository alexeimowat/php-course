<?php
    $fruits = ['apple', 'orange', 'pear'];

    // how to get length of array
    // use count
    // echo count($fruits);

    // search array for value
    // use search array
    // var_dump(in_array('apple', $fruits));

    // add to array
    $fruits[] = 'grape';
    // just gets appended
    // or use array push
    array_push($fruits, 'blueberry', 'strawberry');
    // can include many and appends in that order

    // to add at beginning
    array_unshift($fruits, 'mango');

    // rmeove from array
    // use pop to remove from begining
    array_pop($fruits);

    // to remove from beginning use shift (opposite of unshift)
    array_shift($fruits);

    // to remove from specific index
    // this also removes the index, so doing so will yield indexes of 0, 1, 3, 4, ... etc
    unset($fruits[2]);

    // split into 2 chunks
    // this creates chunks of the sizes given by the argument
    $chunked_array = array_chunk($fruits, 2);

    // print_r($chunked_array);


    // do merges
    $arr1 = [1, 2, 3];
    $arr2 = [4, 5, 6];

    $arr3 = array_merge($arr1, $arr2);

    // array spread
    $arr4 = [...$arr1, ...$arr2];
    // same as merge

    $a = ['green', 'red', 'yellow'];
    $b = ['avacado', 'apple', 'banana'];

    // array combine makes key and value relationship between two arrays and their contents
    $c = array_combine($a, $b);

    // can get an array of the keys from this, 
    $keys = array_keys($c);

    // if want to flip array
    $flipped = array_flip($c);
    // this flips the keys with the values and vice versa

    $numbers = range(1, 20);
    // print_r($numbers);

    // using map
    $newNumbers1 = array_map(function($number) {
        return "Number ${number}";
    }, $numbers);

    // can do the same with an arrow function
    $newNumbers = array_map(fn($number) => "Number ${number}", $numbers);
    // print_r($newNumbers);

    // strip/ filter
    $lessThan10 = array_filter($numbers, fn($number) => $number <= 10);

    // reduce, to get the sum for example


    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

?>