<?php


/*
    PHP Tutorial #8 - Multidimensional Arrays

Notes:
- Arrays nested within other arrays are known as multidimensional arrays.
- They help organize related information into structured, clustered groups.
- A single parent array can contain one or more child arrays inside it.
- Individual elements are retrieved by chaining consecutive index brackets together.

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
