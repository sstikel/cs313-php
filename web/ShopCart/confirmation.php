<?php
session_start();

///////////////confirm purchase/thank you//////////////
///show name
///show address


//link back to browse.php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>confirmation</title>
    <script src="javascript.js"></script>
</head>
<body>
    <h2>Thank you for your purchase, </h2>
    <?php 
      echo "$_POST['name']"; 
      echo "<br><p>Your purchase will be shipped to" . $_POST["address"] . "<br>";

    ?>
    <a href="browse.php">Return to shopping</a>
</body>
</html>