<?php
    $numbers = [1, 2, 3, 4, 5];
    $fruits = array('apple', 'orange', 'pear');

    // print_r($numbers);
    // var_dump($fruits);

    // associative array
    $colors = [
        1 => 'red',
        4 => 'blue',
        6 => 'green'
    ];

    $hex = [
        'red' => '#f00',
        'blue' => '#0f0',
        'green' => '#00f'
    ];
    // echo $colors[4];
    // echo $hex['red'];

    $person = [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'email' => 'brad@gmail.com'
    ];

    $people = [
        [
            'first_name' => 'Brad',
            'last_name' => 'Traversy',
            'email' => 'brad@gmail.com'
        ],
        [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@gmail.com'
        ],
        [
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'jane@gmail.com'
        ]
    ];

    // echo $people[1]['email'];
    var_dump(json_encode($people));
    // use json_decode to turn JSON output to associative array
?>