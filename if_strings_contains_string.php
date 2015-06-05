<?php

/*
The strpos(String Position) function will allow you to check if one string contains another string
and will also determine the first occurrence of that string.
This function has been very useful to me when parsing web pages and should prove useful for you too.
*/

// = assignment operator
// == comparison operator
// === triple equals, identical operator - same value & same data type.

$sentence = 'This is tutorial number 21';
$needle = 'n';

$search = strpos($sentence, $needle);

if ($search === FALSE)
{
	echo 'The string is not found';
}
else
{
	echo 'The position of the string ' . $needle . ' is ' . $search . '<br>';
}

echo $search;


$email = 'janmejay.rai31@gmail.com';
$needle = '@';

$search = strpos($email, $needle);

if ($search === FALSE)
{
	echo '<br> This is not a valid email !';
}
else
{
	echo '<br>  This is a valid email';
}
?>