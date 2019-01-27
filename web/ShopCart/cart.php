<?php
  session_start();
  $total = 0;
  /*$_SESSION = array(
    array("folding", 0, 11),
    array("spade", 1, 12),
    array("transfer", 0, 13),
    array("trench", 2 , 14),
    array("snow", 0, 15),
    array("power", 3, 50000)
  );*/
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link rel="icon" type="image/gif/png" href="img/sicon.png">
    <script src="javascript.js"></script>
</head>
<header>
</header>
<body>
  
  <a href='browse.php'>Continue Shopping</a>
  <br>

<?php
  /////////////show cart items////////////
  if ($_SESSION !== null) {
    echo "<h3>Items In Cart:</h3><br><ul>";
    foreach ($_SESSION as $a) {      
      if ($a[1] !== 0) {
        echo "<li>" . $a[0] . " shovel, $" . $a[2] . ", Qty: " . $a[1] . "</li>";
        echo "<button onclick=''>Remove</button><br><br>";
        $total += $a[2] * $a[1];
      }
    //options to remove
    //option to increase qty
    }
    echo "</ul><br><br>";

    ///////////total/////////////////////
    echo "<h3>Your total: $" . $total . "</h3><br>";
    
    echo '<button onclick="toCheckout()">Checkout</button>';
  }
  else {
    echo "No items in your cart.";
  }

?>


</body>
</html>