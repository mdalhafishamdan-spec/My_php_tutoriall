<?php


/*
  PHP Tutorial #4 - Variables & Constants


  Notes:
  - Variables are used to store information.
  - A variable starts with the $ symbol.
  - The value of a variable can be changed.
  - Constants are values that cannot be changed.
*/


define('NAME','kiki');


  // $name = 'kiki';
  $age = 20;


  // $name = 'kuku';


?>


<!DOCTYPE html>
<html>
    <head>
        <title>PHP tutorials</title>
    </head>
    <body>


        <h1>User Profile Page</h1>


        <div><?php echo NAME; ?></div>
        <div><?php echo $age ?></div>


    </body>
</html>
