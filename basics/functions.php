<?php

function hello($name = 'friend')
{
    return "Hello $name!\n";
}

echo hello();

$current_user = 'Mike';
function is_mike()
{
    global $current_user;
    if ($current_user === 'Mike') {
        echo "It is Mike\n";
    } else {
        echo "It is not Mike\n";
    }
}

is_mike();

function variableFunctions()
{
    $fun1 = 'hello';
    $fun2 = 'is_mike';
    echo $fun1();
    $fun2();
}

variableFunctions();

$name = 'Zheng';
$closureFunc = function () use ($name) {
    echo "Hello $name, this is a closure function.\n";
};

$closureFunc();

echo strlen("How long is this string") . "\n";

$arr = [
    "1a" => 'a',
    "2b" => 'b'
];
var_dump(array_keys($arr));

foreach (array_keys($arr) as $key) {
    echo "key: $key \n";
}

function print_key_val($val, $key)
{
    echo "$key => $val\n";
}

array_walk($arr, 'print_key_val');
