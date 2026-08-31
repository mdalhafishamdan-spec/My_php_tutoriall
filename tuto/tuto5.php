<?php


/*
  PHP Tutorial #5 - Strings

Notes:
- Text data composed of a series of characters is referred to as a string.
- Either single (' ') or double (" ") quotation marks can enclose a string.
- String concatenation is achieved by joining text with the dot (.) operator.
- Variable interpolation allows inserting variables directly within double-quoted strings.
- The total number of characters in a string is returned using the strlen() function.
- Converting all letters in a string to capital letters is done via strtoupper().
- Transforming every character in a string into lowercase format relies on strtolower().
- Specific portions of text within a string can be swapped out using str_replace().
*/

  $stringOne = 'my email is';
  $stringTwo = 'kiki@gmai.com';

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
