<?php

/*
One of the great functions of PHP is the Date function.
It can be used to display the Time, Date and Day.
This video will show you a simple way to output the date and time in a nicely formatted way.
You can find a full list of the PHP date and time characters on the PHP website.
*/

$date = date('m-d-y');
$time = date('H:i:s');
$day = date('l');

echo 'current time is ' . $time . '<br>';
echo 'Today\'s day is ' . $day . '<br>';

?>