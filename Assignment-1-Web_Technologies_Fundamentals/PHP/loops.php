<!-- for loop -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <h1>Loops</h1>
    <P>For Loop from -10 to 10</P>
    <?php
    for ($x = -10; $x <=10; $x++){
        if ($x == 8){
            break;
            
        }
        echo "The Number is: $x <br>";
        
    } 
?> 
<p>While Loop from 1 to 10</p>
<?php
    $number = 1;
    while ($number <10){
        if ($number == 8){
            break;
        } 
        echo $number;
        $number++;
    }
?>
</body>
</html>