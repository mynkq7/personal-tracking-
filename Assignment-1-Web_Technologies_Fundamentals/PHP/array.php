<!-- array  -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
 </head>
 <body>
    <h1>array in PHP</h1>
    <?php
    $Fruits = array("Apple", "Banana", "Orange", "Mango", "Grapes", "Pineapple", "Strawberry", "Watermelon", "papaya", "Kiwi");
    // counting number of items in array
    echo "number of fruits:" . count($Fruits);
    echo "<br>";
    // Outputing specific item from array
 echo $Fruits[3];
 echo "<br>"; 
 echo $Fruits[7];
 echo "<br>";
 echo $Fruits[9];
 echo "<br>";
//  Looping through array
for ($i =0; $i < count($Fruits); $i++) {
    echo "Fruit number" . $i . "is" . $Fruits[$i];
    echo "<br>";

}

    ?>
 </body>
 </html>