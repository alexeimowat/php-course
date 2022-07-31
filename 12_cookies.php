<?php
/*
Cookies are a mecahnism for storing data in the remote browser and thus tracking or identifying return users.
You can set specific data to be stored in the browser, and then retrieve it when the user 
visits the site again.
These are stored on the client. dont want sensitve data on these, use sessions for sensitive data.
Cookies more used for name or something like that, no login info
*/

// set a cookie for one day, multiplied by 30 for 30 days
setcookie('name', 'Alex', time() + 86400 * 30);

if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

setcookie('name', '', time() - 86400);
?>