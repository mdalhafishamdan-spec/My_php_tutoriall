<?php


/*
    PHP Tutorial #9 - Loops


Notes:
- Code can be executed repeatedly using loops.
- A while loop continues executing as long as its specified condition remains true.
- When the exact number of iterations is predetermined, a for loop is the ideal choice.
- Iterating over each item in an array is best handled by a foreach loop.
*/

  //loops

$ninjas = ['kiki', 'kuku', 'koko'];

//for($i = 0; i<count(ninjas); $i++){
    //echo ninjas[i] . '<br />';
//}

//foreach($ninjas as $khai){
   // echo $khai . '<br />';
//}




$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];


//foreach($products as $product){
    //echo $product['name'] . ' - ' . $product['price'];
    //echo '<br />';
//}

//$i = 0;

//while(i<count(products)){
    //echo products[i]['name'];
    //echo '<br />';
    //$i++;
//}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>PHP tutorials</title>
    </head>
    <body>


        <h1>Products</h1>
        <ul>
            <?php foreach($products as $product){ ?>


            <h3><?php echo $product['name']; ?></h3>
            <p><?php echo $product['price']; ?></p>


            <?php } ?>
        </ul>


    </body>
</html>
