<?php


/*
  PHP Tutorial #4 - Variables & Constants

Notes:
- Data and values are kept in memory using variables.
- Every variable name must begin with a dollar sign ($).
- The stored data in a variable remains flexible and can be updated later.
- Once set, constant values stay fixed and cannot be modified throughout execution.
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
