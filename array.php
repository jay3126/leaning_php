<?php
//in Php we need to specify the datatype for array.

//numeric array
$names = array('Jay', 'Tom', 'Jerry');

echo $names[0] . '<br>';

//associative array.
$ages = array('Jay'=>18, 'Tom'=>20, 'Jerry'=>16);
echo 'Jay is ' . $ages['Jay'] . ' years old. <br>';

//we can also print the contents of array using print_r.
print_r($ages);

?>