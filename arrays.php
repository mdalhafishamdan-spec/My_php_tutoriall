<?php


/*
    PHP Tutorial #7 - Arrays


    Notes:
    - An array is used to store multiple values in one variable.
    - An indexed array uses numbers as indexes.
    - The first item in an indexed array has index 0.
    - An associative array uses named keys.
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
