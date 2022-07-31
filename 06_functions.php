<?php
    function registerUser($email) {
        echo $email . ' User registered';
    }

    registerUser('alex@gmail.com');

    // anonomys function
    $subtract = function($n1, $n2) {
        return $n1 - $n2;
    };

    // fn in place of function for arrow function
    $multiply = fn($n1, $n2) => $n1 * $n2;

    // $div = fn($n1, $n2) => $n1 / $n2;
    // echo $subtract(10, 5);
?>