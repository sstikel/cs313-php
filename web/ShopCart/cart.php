<?php
  session_start();
  $total = 0;
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <script src="javascript.js"></script>
</head>
<header>
  <?php //require "header.php" ?>
</header>
<body>
  
  <a href='browse.php'>Continue Shopping</a>
  <br>
  


<?php
  /////////////show cart items////////////
  if ($_SESSION !== null) {
    echo "Items In Cart:<br><ul>";
    foreach ($_SESSION as $a) {
    echo "<li>" . $a[0] . " $" . $a[1] . ", Qty: " . $a[2] . "</li><br>";
    $total += $a[2];
    //options to remove
    //option to increase qty
    }
    echo "</ul><br><br>";\
    ///////////total/////////////////////
    echo "Your total: $" . $total . "<br><br>";
    
    echo '<button onclick="toCheckout()">Checkout</button>';
  }
  else {
    echo "No items in your cart.";
  }

?>


</body>
</html>