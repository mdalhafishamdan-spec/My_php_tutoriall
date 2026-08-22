<?php


/*
    PHP Tutorial #8 - Multidimensional Arrays


    Notes:
    - A multidimensional array is an array of arrays.
    - It can be used to store related data in groups.
    - We can have arrays inside another array.
    - We can access values by using multiple indexes.
*/


  // multi-dimensional arrays


  $blogs = [
    ['title' => 'kiki party','author' => 'kiki', 'content' => 'lorem', 'likes' => 30],
    ['title' => 'kiki kart cheats', 'author' => 'toad',  'content' => 'lorem', 'likes' => 25],
    ['title' => 'kuku hidden chests', 'author' => 'link', 'content' => 'lorem', 'likes' => 50]
  ];


  //print_r($blogs[1][1]);
  //echo $blogs[2]['author'];
  //echo count($blogs);


  $blogs[] = ['title' => 'castle party','author' => 'peach', 'content' => 'lorem', 'likes' => 100];


  //print_r($blogs);
  $popped = array_pop($blogs);
  print_r($popped);


?>


<!DOCTYPE html>
<html>
    <head>
        <title>PHP tutorials</title>
    </head>
    <body>


       


    </body>
</html>
