<?php
$arr = array(12,4,67); #create an array
$arr_2 = ["Hello", "World", "!"]; #another way to create an array 
echo count($arr); #expected: 3
echo implode($arr_2); #expected: Hello World!
print_r($arr); #makes the array human readable
array_push($arr, 34); #adds something to the stack
$arr[] = 45; #add something to the stack
array_pop($arr); #removes top element of stack
array_shift($arr); #removes the first element in the array and shifts 
array_unshift($arr, "Hey, "); #adds something to the beginning of the array
