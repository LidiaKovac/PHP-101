<?php #opening tag
//to start the code, press f5 and look at the debug console
#STRINGS: 

$var = "Hello people"; #declaring a variable 
//echo $var; #logs to the terminal
$name = "duck";
$adjective = "anxious";
$verb = "cook";
//echo "\nI have always been obsessed with {$name}s. I'm {$adjective}ish. I'm always {$verb}ing."; #logging with template literals

$old_name = $name; #normal assignment
$updated_name =& $name; #reference assignement (value will change with name)

#NUMBERS: 

$a = 2;
$b = 3; 


//echo "\na + b = " . $a + $b;
//echo "\na - b = " . $a - $b;
//echo "\na * b = " . $a * $b;
//echo "\na / b = " . $a / $b;
//echo "\na % b = " . $a % $b;
//echo "\na ^ b = " . $a ** $b;

/* 
Operations will be evaluated in the following order:

Any operation wrapped in parentheses (())
Exponents (**)
Multiplication (*) and division (/)
Addition (+) and subtraction (-).
*/

$num = 25;
$answer = $num; 

$answer += 2; #adds 2 to itself
$answer *= 2;
$answer -= 2;
$answer /= 2;

#FUNCTIONS 

function praisePHP() { #create
    echo "\nGood job, PHP, you made it to 2021!";
} 

praisePHP(); #fire

function return_test() {
    echo "\nHELLO";
    return "\n43110"; 
    }
    
    $my_num = return_test(); #also fires the function, prints "HELLO"
    //echo return_test(); #expected: "HELLO 43110"
    //echo $my_num; #prints the return: expected: 43110

function sum($a, $b) {
    return $a + $b;
}

function sum_defined($a = 12, $b = 1) {
    #since I have specified default values for a and b, I can omit or partially emit one of the paramters when firing the function and it will use the default value
    return $a + $b;
}

//echo "\n" . sum(2,7) . "\n" . sum_defined(4); 
function convertToQuestion(&$string) { #by using the & operator we pass the param as reference, so it will always be changed. 
    $string = "Do you think ". $string . "?\n";
    return $string;
    }
$var = "DOGS ARE CUTE";
//echo convertToQuestion($var);

$language = "PHP";
$topic = "scope";

function generateLessonName($topic)
{
  global $language; #grabs language from outside the scope
  return $language . ": " . $topic;
}

//echo generateLessonName($topic);