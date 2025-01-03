<?php 


const TAX_RATE = 20;
$price = 200;
$tax_sum = ($price/100) * TAX_RATE;
$final_price = $price + $tax_sum;

echo "<h1>Purchase Details</h1>";
echo "<p>Price: $price dollars</p>";
echo "<p>Tax rate: " . TAX_RATE . "%</p>";
echo "<p>Tax sum: $tax_sum dollars</p>";
echo "<p>Final price: $final_price dollars</p>";


