<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My First PHP Page</title>
</head>
<body>
    
    <?= "<h1>Hello, My name is Vlad Belza</h1>" ?>
    <?= "<p>It is my first PHP-page and here I want to <span>practise!</span> </p>" ?>

    <?php
    //List of my favourite films
        echo "<h2>Here is the list of my favourite films</h2>";
       
        echo"
        <ul>
            <li>The Godfather</li>
            <li>The Dark Knight</li>
            <li>Se7en</li>
            <li><a href=\"https://www.imdb.com\">IMDb</a></li>
        </ul>
        ";
    ?>
</body>
</html>