<?php

    $greeting = 'Hello';
    $name = 'Vlad';
    $time_of_day = 'morning';
    $mood = 'great';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $greeting ?></title>
</head>
<body>
    <?php
    
     

        echo "<p>$greeting, $name ! Have a $mood $time_of_day !</p>";
    ?>
</body>
</html>