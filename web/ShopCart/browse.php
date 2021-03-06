<?php
  session_start();
  $_SESSION = array(
    array("folding", 0, 11),
    array("spade", 0, 12),
    array("transfer", 0, 13),
    array("trench", 0 , 14),
    array("snow", 0, 15),
    array("power", 0, 50000)
  );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shovel Depot</title>
    <link rel="icon" type="image/gif/png" href="img/sicon.png"> <!--add to all other pages-->
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <script type="text/javascript" src="javascript.js"></script>
</head>
<header>
  <div class="dHeader">
    <?php require 'header.php' ?> 
  </div>
  <hr>
</header>
<body>
    
    <!--Grid-->
    <!--Items-->
    <!--item description-->
    <!--add to cart-->
    <!--price-->
    <div class="grid-cont">
      <div class="grid-item">
        <img src="img/folding.jpg" alt="Folding Shovel">
        01 <!--Make link to description page-->
        <button id="" onclick="itemAdd('folding')">Add</button>
        <button id="" onclick="itemRemove('folding')">Remove</button>
      </div>
      <div class="grid-item">
        <img src="img/spade.jpg" alt="Spade Shovel">
        02 <!--Make link to description page-->
        <button id="" onclick="itemAdd('spade')">Add</button>
        <button id="" onclick="itemRemove('spade')">Remove</button>
      </div>
      <div class="grid-item">
        <img src="img/transfer.jpg" alt="Transfer Shovel"
        >03 <!--Make link to description page-->
        <button id="" onclick="itemAdd('transfer')">Add</button>
        <button id="" onclick="itemRemove('transfer')">Remove</button>
      </div>
      <div class="grid-item">
        <img src="img/trench.jpg" alt="Trenching Shovel">
        04 <!--Make link to description page-->
        <button id="" onclick="itemAdd('trench')">Add</button>
        <button id="" onclick="itemRemove('trench')">Remove</button>
      </div>
      <div class="grid-item">
        <img src="img/snow.jpg" alt="Snow Shovel">
        05 <!--Make link to description page-->
        <button id="" onclick="itemAdd('snow')">Add</button>
        <button id="" onclick="itemRemove('snow')">Remove</button>
      </div>
      <div class="grid-item">
        <img src="img/power.jpg" alt="Power Shovel">
        06 <!--Make link to description page-->
        <button id="" onclick="itemAdd('power')">Add</button>
        <button id="" onclick="itemRemove('power')">Remove</button>
      </div>

    </div>
     <!--Grid End-->
    <br><br>
    <a href="cart.php">View Cart</a>


</body>
<footer>
  <hr>
  <div class="dFooter">
    <?php require 'footer.php' ?>
  </div>
</footer>
</html>