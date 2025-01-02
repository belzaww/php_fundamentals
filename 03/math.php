<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
</head>
<body>
    <?php

        $num1 = 20;
        $num2 = 10;

        $sum = $num1 + $num2;
        $subtraction = $num1 - $num2;
        $multiplication = $num1 * $num2;
        $division = $num1 / $num2;
        $remainder = $num1 % $num2;

        echo "<p>Sum of $num1 and $num2 is $sum</p>";
        echo "<p>Subtraction of $num1 and $num2 is $subtraction</p>";
        echo "<p>Multiplication of $num1 and $num2 is $multiplication</p>";
        echo "<p>Division of $num1 and $num2 is $division</p>";
        echo "<p>Remainder of $num1 and $num2 is $remainder</p>";

    ?>
</body>
</html>