<?php
session_start();

$name = htmlspecialchars($_POST["name"]);
$address = htmlspecialchars($_POST["address"]);

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
    <link rel="icon" type="image/gif/png" href="img/sicon.png">
    <script src="javascript.js"></script>
</head>
<body>
    <?php 
      echo "<h2>Thank you for your purchase, </h2>" . $name; 
      echo "<br><p>Your purchase will be shipped to " . $address . "<br><br>";

    ?>
    <a href="browse.php">Return to shopping</a>
</body>
</html>