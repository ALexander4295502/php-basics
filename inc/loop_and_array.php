<?php

$learn = array('Conditionals', 'Arrays', 'Loops');

//var_dump($learn);
//
//var_dump($learn[2]);
//
//echo implode("\n", $learn);

//array_push($learn, 'new item1', 'new item2');
//var_dump($learn);

//// array unshift will update the indexes of the array which costs O(n)
//array_unshift($learn, 'new head1', 'new head2');
//var_dump($learn);

//array_pop($learn);
//var_dump($learn);

//array_shift($learn);
//var_dump($learn);
//
//unset($learn);

//$ice_cream = array('hello' => 'world', 'goodbye' => 'world');
//var_dump($ice_cream);
//var_dump($ice_cream['hello']);
//var_dump($ice_cream["goodbye"]);

// // Mixing data types in arrays
//$keys = array(
//    1 => 'a',
//    '1' => 'b'
//);
//
//var_dump($keys);

//// Multi-dimensional array
//$task1 = array(
//    'title' => 'Laundry',
//    'priority' => 2
//);
//
//$task2 = array(
//    'title' => 'Laundry',
//    'priority' => 2
//);

//$todoList = array($task1, $task2);
//var_dump($todoList);

//// php7 syntax sugar
//$todoList_copy = [];
//array_push($todoList_copy, $task1);
//array_push($todoList_copy, $task2);
//var_dump($todoList_copy);

// Sorting Arrays
$unsorted_array = ['a', 'c', 'b'];
asort($unsorted_array);
var_dump($unsorted_array);

$unsorted_array = ['a', 'c', 'b'];
sort($unsorted_array);
var_dump($unsorted_array);

$unsorted_array = ['a', 'c', 'b'];
rsort($unsorted_array);
var_dump($unsorted_array);

$unsorted_array = ['a', 'c', 'b'];
shuffle($unsorted_array);
var_dump($unsorted_array);

$unsorted_array = [
    'c' => '123',
    'b' => '456',
    'a' => '789'
];
ksort($unsorted_array);
var_dump($unsorted_array);