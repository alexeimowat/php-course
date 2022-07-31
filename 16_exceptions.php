<?php
    /*
    PHP has an exeception model similar to that of other programming langs
    AN exception can be thrown, and caught ("catched") within PHP. Code may be
    surrounded in a try block, to faciliate the catching of potential exceptions.
    Each try must have at least one corresponding catch or finally block
    */

    function inverse($x) {
        // !x is equavalent to 0 basically
        if(!$x) {
            throw new Exception('Division by zero');
        }

        return 1/$x;
    }

    // try catch doesn't stop the programming if exception caught, notice the Hello world still runs
    try {
        echo inverse(5);
        echo inverse(0);
    } catch(Exception $e) {
        echo 'Caught Exception', $e->getMessage(), ' ';
    } finally {
        echo 'First Finally';
    }

    try {
        echo inverse(5);
    } catch(Exception $e) {
        echo 'Caught Exception', $e->getMessage(), ' ';
    } finally {
        echo 'Second Finally';
    }

    echo 'Hello World';
?>