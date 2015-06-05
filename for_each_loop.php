<?php

$names = array('Jay', 'Tom', 'Jerry');
$ages = array('10', '20', '30', '40', '50', '60', '70', '80', '90', '100');

print_r($names);
echo '<br> <br>';

print_r($ages);
echo '<br> <br>';

/* foreach loop
foreach (variable as variable)
{
	code here
}
*/

foreach ($names as $person)
{
	echo 'The name is ' . $person . '<br> <br>';
}

foreach ($ages as $age)
{
	echo 'The number is ' . $age . '<br> <br>';
}

?>