<?php


/*
    PHP Tutorial #7 - Arrays


  
PHP Tutorial #7 - Arrays

Notes:
- Arrays allow you to keep several values together inside a single variable.
- Numerical values serve as keys in an indexed array.
- Index counting for an indexed array always starts at 0 for the initial element.
- Named or string-based keys are used to identify values in an associative array.

```
*/


  // indexed arrays


 $peopleOne = ['kiki', 'kuku', 'koko'];
 //echo $peopleOne[1]


 $peopleTwo = array('laila', 'claude');
 //echo $peopleTwo[1];


 $ages = [20, 30, 40, 50];
 //print_r($ages);


 $ages[1] = 25;
 //print_r($ages);


 $ages[] = 60;
 //print_r($ages);


 array_push($ages, 70);
 //rint_r($ages);


 //echo count($ages);


$peopleThree = array_merge($peopleOne, $peopleTwo);
//print_r($peopleThree);


  // associative arrays (key & value pairs)


  $ninjasOne = ['kiki' => 'black', 'claude' =>  'orange', 'khai' => 'brown'];
  //echo $ninjasOne['claude'];
  //print_r($ninjasOne);
 
  $ninjasTwo = array('bowser' => 'green', 'peach' => 'yellow');
  //print_r($ninjasTwo);
 
  $ninjasTwo['peach'] = 'pink';
  //print_r($ninjasTwo);


  //echo count($ninjasOne);


  $ninjasThree = array_merge($ninjasOne, $ninjasTwo);
  print_r($ninjasThree);
?>


<!DOCTYPE html>
<html>
   
    <head>
        <title>PHP tutorials</title>
    </head>
    <body>


       


    </body>
</html>
