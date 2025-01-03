<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week</title>
    <style>
        body{
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            background-color: aqua;
        }
        h1{
            text-align: center;
            
        }
        table {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            margin: 0 auto;
            margin: 20px auto;
            background-color: #f0f8ff;
        }

        td,
        th {
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>

<body>

</body>

</html>
<?php

    const MONDAY = 'Monday';
    const TUESDAY = 'Tuesday';
    const WEDNESDAY = 'Wednesday';
    const THURSDAY = 'Thursday';
    const FRIDAY = 'Friday';
    const SATURDAY = 'Saturday';
    const SUNDAY = 'Sunday';
    $day_of_week = 'Day of Week';

    echo "<h1>Week</h1>";

    echo "
        <table>
    <tr>
        <th>" .$day_of_week . "</th>
        <th>" .$day_of_week . "</th>
        <th>" .$day_of_week . "</th>
        <th>" .$day_of_week . "</th>
        <th>" .$day_of_week . "</th>
        <th>" .$day_of_week . "</th>
        <th>" .$day_of_week . "</th>
      
    </tr>
    <tr>
        <td>". MONDAY ." </td>
        <td>". TUESDAY ." </td>
        <td>". WEDNESDAY ." </td>
        <td>". THURSDAY ." </td>
        <td>". FRIDAY ." </td>
        <td>". SATURDAY ." </td>
        <td>". SUNDAY ." </td>
    </tr>
</table>
    ";
    

?>

