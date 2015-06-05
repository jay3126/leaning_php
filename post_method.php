<?php

/*
Similar to the GET variable, the POST variable allows you to send data to the server from a HTML Form,
but the data is invisible to the user.
This is a great increase in security because if you are using the POST Variable to store information
such as a password, the password is not visible in plain-text.
*/

$user_name = $_POST['username'];
$password = $_POST['password'];

if ($user_name == 'Jay' and $password == 'password1')
{
	echo 'Welcome to the website, you are in !';
}
else
{
	echo 'Wrong username or password';
}

?>