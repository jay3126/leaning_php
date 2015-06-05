<?php

$num1 = 1;
$num2 = 20;

if ($num1 == 10)
{
	echo 'The number is 10';
}
elseif ($num1 > 10)
{
	print 'The number is greater than 10' . '<br>';
}
elseif ($num1 > $num2)
{
	echo 'Number1 is not greater than Number 2 <br>';
}
elseif ($num2 > $num1)
{
	print 'Number2 is greater than number1 <br>';
}
elseif ($num1 < $num2)
{
	echo 'Number1 is smaller than number 2 <br>';
}
elseif ($num2 < $num1)
{
	print 'Numbmer 2 is smaller than number 1 <br>';
}
elseif ($num1 != $num2)
{
	echo 'Number 1 & number 2 are not equal';
}
else
{
	echo 'Nothing to show';
}

?>