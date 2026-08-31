<?php
/*
  PHP Tutorial #14 - Variable Scope

Notes:
- it exists only inside this function.
- $price is not accessible here because it was declared.
- inside myFunc() and stays local to that function.
*/
// variable scope

// local vars

function myFunc(){
    $price = 10;
    echo $price;
}

myFunc();
echo $price;


// function myFuncTwo($age){
//   echo $age;
// }


// global variables
$name = 'apis';

// function sayHello(){
//   global $name;
//   $name = 'yoshi';
//   echo "hello $name";
// }

// sayHello();
// echo $name;

function sayBye(&$name){
    $name = 'apis';
    echo "bye $name";
}

sayBye($name);
echo $name;

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>
    
</body>
    </html>