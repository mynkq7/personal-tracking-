<!-- Data Types -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>
 </head>
 <body>
    <h1>Data Types</h1>
    <?php
    $First = "Alice";
    $Second = 20;
    $Third = 5.5;
    $Fourth = true;
    $fifth = null;
    $sixth = array("Red", "Green", "Blue");
echo "<pre>";    
    echo "First: $First\n";
    echo "Second: $Second\n";
    echo "Third: $Third\n";
    echo "Fourth: $Fourth\n";
    echo "Fifth: $fifth\n";
    echo "sixth: $sixth";
 echo "</pre>";   
echo "<pre>";
var_dump($First);
var_dump($Second);
var_dump($Third);
var_dump($Fourth);
var_dump($fifth);
var_dump($sixth);
echo "</pre>"; 


  ?>  
    </body>
 </html>