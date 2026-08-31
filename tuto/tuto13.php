<?php

   
  // functions
/*
    PHP Tutorial #13 - Functions

*/
 

function sayHello($name = 'apis', $time = 'morning'){
  echo "good $time $name";
}

//sayHello('apis');
sayHello ('apis', 'night');

function formatProduct($product){
  // echo "{$product['name']} costs £{$product['price']} to buy <br />";
  return "{$product['name']} costs £{$product['price']} to buy <br />";
}

// $formatted = formatProduct(['name'=>'gold star', 'price'=> 20]);
// echo $formatted;

?>



<!DOCTYPE html>
<html>
<head>
  <title>PHP Tutorials</title>
</head>
<body>

</body>
</html>