<?php
session_start();

echo "Checkout page.....";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
    <script src="javascript.js"></script>
</head>
<body>
    


<?php
////////////Return to cart - button///////////
echo '<button onclick="toCart()">Return to Cart</button>';

///////////Personal info - form//////////////
//name
//address
//no more info to collect
?>
<form action="confirmation.php" method="post">
  Name:<br>
  <input type="text" name="name"><br>
  Address:<br> 
  <textarea rows="3" cols="35" name="address"></textarea><br>
  <input type="submit" value="Purchase"><br>
</form>

<?php
///////////////Purchase - button//////////// -maybe a return to cart btn as well
echo '<button onclick="toConfirmation()">Purchase</button>';




?>

</body>
</html>