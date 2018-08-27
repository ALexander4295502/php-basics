<?php
$a = '20';
$b = (int)20;
$c = (string)$b;

var_dump($a, $b, $c);

if ($a > $b) {
    echo "$a is larger than $b";
} elseif ($a < $b) {
    echo "$b is larger than $a";
} else {
    echo "$a is equal to $b";
}