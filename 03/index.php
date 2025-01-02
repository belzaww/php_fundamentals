<?php

$title = 'Lesson 3';
// $title = 123;
// $title2 = 'Lesson new';
// $Title = 'Lesson new';
$myFirstName = "Vlad";
$my_second_name = "Belza";
$вік = 20;
$vik = 20;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <?php
        
        echo "<h1>$title</h1>";
        echo "<h1>$myFirstName</h1>";
        echo "<h1>$my_second_name</h1>";
        echo "<h1>$вік</h1>";




    ?>
</body>
</html>