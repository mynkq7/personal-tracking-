<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h1>Functions</h1>
    <?php
    function greet($name) {
        echo "Hello, $name! how is it going? <br>";}
        greet("john");
    function addition($a, $b) {
        return $a + $b;}
        echo "so the sum of two numbers 5 and 10 is:    " . addition(5,10);
    ?>
</body>
</html>