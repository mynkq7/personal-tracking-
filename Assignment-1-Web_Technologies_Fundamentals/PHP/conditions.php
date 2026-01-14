<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condtions</title>
</head>
<body>
    <h1>Conditions</h1>
    <?php
    $Age = 21;
    if ($Age < 18) {
        echo "You are not allowed to drive.";
    } elseif ($Age == 18) {
        echo "You turned 18, have you got your driving license?";
    }
    else {
        echo "You are allowed to drive.";
    }

    ?>
</body>
</html>