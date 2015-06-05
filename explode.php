<?php

/*
The Explode function will allow you to split a string up by the string that you declare.
So you could split a paragraph up into sentences by splitting it by a full stop or even split a
sentence up into words by splitting it by a space.
This video will show you how to explode a string and then access each string stored inside arrays.
*/

$sentence = 'I am njoying Php video tutorials';

$parts = explode(' ', $sentence);

print_r($parts);

?>