<?php

/*
The GET Variable will allow you to store data taken directly from the user.
It can be taken from a HTML Form using the GET method or even directly from the URL.
This video will introduce the GET Variable and show you how you can take input from the user
and put it through the processor and then return a dynamic result back to the browser.
*/

$name = $_GET['name'];
$age = $_GET['age'];
echo 'Welcome to the website ' . $name . '<br>';
echo 'Your age is ' . $age . '<br>';

?>