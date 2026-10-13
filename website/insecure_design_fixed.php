<?php
$product_price = 1000;
$discount = $_GET["discount"] ?? 0;

$discount = (int)$discount;

if ($discount < 0) {
    $discount = 0;
}

if ($discount > $product_price) {
    $discount = $product_price;
}

$final_price = $product_price - $discount;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fixed Insecure Design Lab</title>
</head>
<body>

<h1>Secure Discount System</h1>

<p>Product Price: ₹<?php echo $product_price; ?></p>
<p>Discount: ₹<?php echo $discount; ?></p>
<p>Final Price: ₹<?php echo $final_price; ?></p>

</body>
</html>
