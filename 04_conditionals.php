<?php
$posts = ['first Post'];

//echo !empty($posts) ? $posts[0] : 'No posts';

// can use to assign values based on conditions

// coalescing operator
$firstPost = $posts[0] ?? null;

// switches
$favColor = 'yellow';
switch($favColor) {
    case 'red':
        echo 'You favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite is not any of those lol';
}
?>