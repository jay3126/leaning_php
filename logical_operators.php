<?php

$name = 'Jay';
$password = 'password1';

if ($name == 'Jay' and $password == 'password3'){
	echo 'Welcome to the website';
}
elseif ($password == 'password1' or $password == 'password2')
{
	echo 'your password is correct';
}
else
{
	echo 'Please enter correct password.';
}

?>