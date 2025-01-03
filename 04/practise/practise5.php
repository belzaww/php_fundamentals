<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card</title>
    <!-- <style>
    div {
        border: 1px solid black;
        background-color: aqua;
        width: 300px;
        padding: 30px;
    }
    h1{
        text-align: center;
    }
</style> -->
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f8ff; /* світлий фон */
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    div {
        border: 1px solid #ccc; /* м'який сірий колір для кордону */
        background-color: #ffffff; /* білий фон */
        width: 300px;
        padding: 30px;
        border-radius: 10px; /* округлені краї */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* тінь для глибини */
        text-align: center;
    }

    h1 {
        font-family: 'Arial', sans-serif;
        font-size: 1.5em;
        color: #333; /* темно-сірий колір для тексту */
    }

    p {
        font-size: 1em;
        margin: 10px 0;
        color: #555; /* світло-сірий для тексту */
    }

    strong {
        color: #000; /* чорний для акценту */
    }

    i {
        font-style: italic;
        color: #0066cc; /* синій для номера телефону */
    }
    </style>
</head>
<body>

<?php 

    const COMPANY_NAME = "Small time company";
    const ADDRESS = "Big Town";
    const PHONE = "+380-000-000-000";

    echo "<div>
    <h1>".COMPANY_NAME."</h1>
    <p><strong>Address: </strong>" .ADDRESS. " </p>
    <p><strong>Phone:</strong> <i>".PHONE."</i></p>
</div>";

?>

</body>
</html>


