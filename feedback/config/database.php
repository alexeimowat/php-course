<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'alex');
    define('DB_PASS', '123456');
    define('DB_NAME', 'php_dev');

    // basically making a new connection instance like we did with the classes.
    // creating new mysqli object
    // so this makes our connection using the parameters we made before 
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // now we want to check and make sure the connection will work
    if($conn->connect_error) {
        die('Conection Failed ' . $conn->connect_error);
    }

    // echo 'CONNECTED!';
?>