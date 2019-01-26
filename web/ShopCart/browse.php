<?php
  session_start();
  $_SESSION['numCart'] = array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shovel Depot</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<header>
  <div class="dHeader">
    <?php require 'header.php' ?>
  </div>
</header>
<body>
    Beginning of my browse page...
    <div class="grid-cont">
      <div class="grid-item">01</div>
      <div class="grid-item">02</div>
      <div class="grid-item">03</div>
      <div class="grid-item">04</div>
      <div class="grid-item">05</div>
      <div class="grid-item">06</div>
      <div class="grid-item">07</div>
      <div class="grid-item">08</div>
      <div class="grid-item">09</div>
      <div class="grid-item">10</div>
      <div class="grid-item">11</div>
      <div class="grid-item">12</div>

    </div>
</body>
<footer>
  <div class="dFooter">
    <!--require footer.php-->
  </div>
</footer>
</html>