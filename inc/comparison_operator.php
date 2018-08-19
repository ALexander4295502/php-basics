<?php
$a = 10;
$b = 5;

if ($a !== $b) {
    echo '$a is not equal to $b' . "\n";
}

$a = false;

if (!$a) {
    echo '$a is falsy' . "\n";
}

if ($a === $b) {
    echo 'equal' . "\n";
} elseif ($a < $b) {
    echo '$a is less than $b' . "\n";
} elseif ($a > $b) {
    echo '$a is greater than $b' . "\n";
}