<?php


/*
  PHP Tutorial #5 - Strings


  Notes:
  - a string is a sequence of characters.
  - Strings can be written using single or double quotes.
  - We can combine strings using the operaator.
  - We can use variables inside strings.
  - strlen() can be used to get the length of a string.
  - strttoupper() changes a string to uppercase.
  - strtolower() changes a string to lowercase.
  - str_replace() is used to replace text in a string.
*/


  $stringOne = 'my email is';
  $stringTwo = 'kiki123@gmai.com';


  //echo $stringOne . $stringTwo;


  $name = 'kiki';


  //echo 'Hey, my name is ' . $name;


  //echo "Hey my name is $name";


  //echo "the kiki screamed \"whaaa\"";
  //echo 'the kiki screamed "whaaa"';


  //echo $name[1];


  //echo strlen($name);
  //echo strtoupper($name);
  //echo strtolower($name);
  echo str_replace('e', 'i', $name);


 
?>


<!DOCTYPE html>
<html>
    <head>
        <title>PHP tutorials</title>
    </head>
    <body>


       


    </body>
</html>
