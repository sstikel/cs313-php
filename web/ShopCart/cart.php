<?php
  session_start();
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
<body>
    
</body>
</html>
<?php
  echo "this will be the cart page";

  ///////////Link back to browse////////////////
  echo "<a href='browse.php'>Continue Shoping</a>";

  /////////////show cart items////////////
  foreach ($_SESSION as $a) {

  }


  //options to remove
  //option to increase qty


///////////total/////////////////////


//////////button - checkout////////////
?>
<button onclick="toCheckout()">Checkout</button>

