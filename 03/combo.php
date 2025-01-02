<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics</title>
</head>
<body>
    <?php
    
        $discount = 40;
        $quantity = 10;
        $price = 5;
        $total_price = $price * $quantity;
        $discount_price = ($total_price / 100) * $discount;
        $final_price = $total_price - $discount_price; 
        $item = $quantity > 1 ? 'books' : 'book';
       
        
        echo "<p style='color: blue; font-weight: bold;'>You bought $quantity $item for total price ".  $final_price ." dollars after a $discount% discount.</p>";

    ?>
</body>
</html>