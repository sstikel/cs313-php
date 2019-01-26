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
  this will be the cart page
  <br>
  <a href='browse.php'>Continue Shoping</a>
  <br>
  <button onclick="toCheckout()">Checkout</button>
</body>
</html>

<?php
  

  ///////////Link back to browse////////////////
  

  /////////////show cart items////////////
  foreach ($_SESSION as $a) {

  }


  //options to remove
  //option to increase qty


///////////total/////////////////////


//////////button - checkout////////////
?>


