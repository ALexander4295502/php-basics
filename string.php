<?php
$name = 'Zheng';
$string_one = "Hello $name!";
echo $string_one;

// Escape strings
echo "\nHello dollar \$";

// Combining Strings
echo  "\n" . 'Hello ' . $name ."\n";
$name .= ', nice to meet you';
echo $name;
