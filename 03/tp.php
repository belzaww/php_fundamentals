<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="jak.css">
</head>
<body>
    <p>
        Hello
    </p>

    <?php
    
    $discount = 40;
    $quantity = 10;
    $price = 5;
    $total_price = $price * $quantity;
    $discount_price = ($total_price / 100) * $discount;
    $final_price = $total_price - $discount_price; 
    $item = $quantity > 1 ? 'books' : 'book';
   
    
    echo "
<table border='1' cellpadding='10'>
    <tr>
        <th>Item</th>
        <th>Quantity</th>
        <th>Price per Item</th>
        <th>Total Price</th>
        <th>Discount</th>
        <th>Final Price</th>
    </tr>
    <tr>
        <td>$item</td>
        <td>$quantity</td>
        <td>$$price</td>
        <td>$$total_price</td>
        <td>$discount%</td>
        <td>$$final_price</td>
    </tr>
</table>";
?>
</body>
</html>