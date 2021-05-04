<?php 

$var1 = "String this like a guitar";
$var2 = 420; 

gettype($var1); #expected: string
gettype($var2); #expected: integer
var_dump($var1); #expected: string(25) "String me like a guitar"
var_dump($var2); #expected: int(420)

#STRING FUNCTIONS 
$laugh = "ah"; 
strrev($var1); #exp: ratiug a ekil siht gnirtS
strtolower($var1); #exp : string me like a guitar
str_repeat($laugh, 10); #exp: ahahahahahahahahahah

$story = "I was like, \"Dude, like just tell me what you like think because like everyone 
else is like being totally honest, and like I just want to know what you 
like think.\" So like I don't know...";
 
substr_count($story, "like"); // exp: 8, the times the word like is repeated in the string

#NUMBER FUNCTIONS 
abs(-5); #exp: 5
round(12.3); #exp: 12
rand(1,6); #exp: a random num between 1 and 6
$input = "Alien";
str_pad($input, 10, "-=", STR_PAD_LEFT); #exp "-=-=-Alien"  PLEASE NOTE: the second parameter is the final number of chars to give to the string
strtoupper($input) . "!"; #exp: ALIEN!
pi(); #gets the value of pi
