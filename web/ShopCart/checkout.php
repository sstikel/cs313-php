<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
    <link rel="icon" type="image/gif/png" href="img/sicon.png">
    <script src="javascript.js"></script>
</head>
<body>
    
Checkout Page

<?php
////////////Return to cart - button///////////
echo '<button onclick="toCart()">Return to Cart</button><br>';

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

</body>
</html>