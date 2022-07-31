<?php
/*
Sessions are a way to store information (in variables) to be used across multiple pages,
unlike cookies, sessions are stored on the server

cookies are on the users browser, sessions is on the server
*/
session_start();
if (isset($_POST['submit'])) {
    // wrapping input values in htmlspecialchars would result in only displaying content, not actually executing it
    // $name = htmlspecialchars($_POST['name']);
    // $age = htmlspecialchars($_POST['age']);

    // or can use filter_input
    $username = filter_input(INPUT_POST, 'username', 
        FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if($username == 'john' && $password == 'password') {
        $_SESSION['username'] = $username;
        header('Location: /php-crash/extras/dashboard.php');
    }
    else {
        echo 'Incorrect Login';
    }
        // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    // or can use filter_var
    // $name = filter_var($_POST['name']);
    // echo $name;
    // echo $age;

}
// Get can be used with forms and urls, post can only be used with forms
// issues with get, values displayed in url not as secure
// better to use get for searches, post much more secure

/*
As we can see below, we are doing a query string. We can add more data using an ampersand.
First one is a question mark, after that any other variables you want is & symbol
*/
?>



<!-- Form can be get or post request, get by default.
if want to override add a method in the form to say which type -->

<!-- Because we have the name attributes the same as earlier, the $_GET calls on lines 4
and 5 will still get the information from those fields when we submit! -->

<!-- The form action can also be vulnerable sometimes so it is also sometimes wrapped in 
htmlspecialchars -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="Submit" name="submit">

</form>
