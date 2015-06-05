<?php

/*
The isset function will allow you to determine if a variable has been set or not.
This can be useful when checking if user input has been entered or not.
The function will return either a true or false value.
*/

if (isset($_GET['user']))
{
	echo 'Welcome to the website ' . $_GET['user'];
}

?>