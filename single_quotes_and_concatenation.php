<?php

$word = "World";

echo "Hello $word <br>";

print 'Hello $word <br>';

//concatenation example with single quotes.
echo 'Hello' . $word . '<br>';

//-----------------echoing a html in php--------------------------

//below link will throw a parse error when using double quotes.
//echo "<a href="www.google.com">Google</a>";

//correct example of showing link - use single quotes.
echo '<a href="www.google.com">Google</a>';

//using variable in html
$google = "Variable Google";
echo '<a href="www.google.com">' . $google . '</a>';

/*slower to pass a variable in double quotes. Very easy to use variable in single quotes
as the execution will be very faster for server.
*/

//-----------------------------using apostrophy with single quotes----------------

/*below line will throw an error, since Php thinks that the code has been finished after it.
This can be achieved by using \ as escape character.
*/
//echo 'Hello it's a nice day to learn php';

//correct usage.
echo 'Hello it\'s a nice day to learn php';

//using backslash
echo 'We can use double\\single quotes';

?>