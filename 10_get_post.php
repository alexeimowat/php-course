<?php
// we can pass data through urls and forms using the $_GET
// and $_POST superglobals

// what if these fields are empty initially? We get an error (undefined), dont want this
// use empty or isset
// below, we want to check if the submit button has been set, can acces it with post['submit'], since we named it that

if (isset($_POST['submit'])) {
    echo $_POST['name'];
    echo $_POST['age'];
}
// Get can be used with forms and urls, post can only be used with forms
// issues with get, values displayed in url not as secure
// better to use get for searches, post much more secure

/*
As we can see below, we are doing a query string. We can add more data using an ampersand.
First one is a question mark, after that any other variables you want is & symbol
*/
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Alex&age=26">Click</a>

<!-- Form can be get or post request, get by default.
if want to override add a method in the form to say which type -->

<!-- Because we have the name attributes the same as earlier, the $_GET calls on lines 4
and 5 will still get the information from those fields when we submit! -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">

</form>