<?php

/*
PHP already holds hundreds of built-in functions that you use in your everyday applications,
but in PHP you have the ability to create your own functions.
A function will carry out a pre-determined set of code and can be called whenever you want it to.
Functions can also take parameters so you can specify the data that is entered into a function each time you call it. Functions can also be used to return values.
This video will cover the wonderful world of functions.
*/

/* syntax for writing function in php.

function function_name(params)
{
	code here
}

functions can be called with the keyword echo.
*/

function welcome($name, $age, $city)
{
	echo 'Welcome to the website ' . $name . '. <br>';
	echo 'You are ' . $age . ' years old <br>';
	echo 'You live in ' . $city . '. <br>';
}

echo welcome('Jay', '29', 'Lucknow');

function add($num1, $num2)
{
	echo $num1 + $num2 . '<br>';
}

echo add('10', '20');

function subscract($num1, $num2)
{
	$total = $num1 - $num2;
	echo  $total;
}

subscract(30, 15);

?>