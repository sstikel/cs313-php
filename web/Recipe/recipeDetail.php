<?php
/*****************************************
*recipeDetail.php
*Author: Sam Gay
*Date: 2/7/19
*Purpose: show user recipe information from database
*         i.e. ingredients, measurments, instructions, author, 
               notes (if signed in user that has made notes about given recipe)
*****************************************/

require '../generalFiles/dbAccess.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/gif/png" href="../generalImg/sicon.png">
    <link rel="stylesheet" type="text/css" href="../generalFiles/generalSS.css">
    <script type="text/javascript" src="../generalFiles/generalJS.js"></script>
    <title>Recipe Details</title>
</head>
<header>
  <h1>Recipe Details</h1>

  <!--Sign in button-->

  <!--Display recipe-->
  <?php

  /////////TODO - add in db calls for qty and measurement///////////////
  //going to need to join for this......

    $id = $_GET["id"];
    $db = getDb();
    $scripturesStmt = $db->prepare('SELECT * FROM db.recipe WHERE id= :id');
    $scripturesStmt->bindParam(':id', $id, PDO::PARAM_INT);
    $scripturesStmt->execute();
    $scripture = $scripturesStmt->fetch(PDO::FETCH_ASSOC);
       
    //Title
    echo '<h1>' . $recipe["title"] . '</h1><br><br><div class="dIngr"><ul>';

    //ingredients - bulleted - qty - measurement
    //foreach ()
    //echo '<li>' . $ingredient["ingredient"] . ' - ' . qty . ' ' . measurement . '<li>'
    

    //instructions
    echo '</ul></div><br><p>Instructions<br>' . $recipe["instructions"] . '</p><br>';

    //TODO - notes from user


    //TODO - button - create user note
    ?>

  <hr>
  <br>
</header>

<body>
    
</body><footer>
  <br>
  <hr>
  <a href="../Wk02Home.php">Sam's Homepage</a>
</footer>
</html>