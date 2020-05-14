<?php
// single line comment
# single line comment
// double line 
// comment
echo 'print';
print 'slower print';

// variables
$variable = 'this is a variable';
echo $variable;

// strings
$string1 = 'this is';
$string2 = 'a string';

$concatString = $string1 . ' ' . $string2;
$concatString2 = "$string1 $string2";

echo $concatString;
echo $concatString2;

define('constant', 'this is a constant');
echo constant;

define('constant_insensitive', 'this is a constant', true);
echo conStanT_iNsEnsiTive;

?>
