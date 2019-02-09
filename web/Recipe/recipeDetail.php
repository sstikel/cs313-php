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

  

  <hr>
  <br>
</header>

<body>
    <!--Display recipe-->
  <?php

/////////TODO - add in db calls for qty and measurement///////////////
//, i.ingredient, i.qty, m.measurement
//JOIN db.ingredient i 
      //ON r.id = i.recipe_id
//JOIN db.measurement m
//ON i.measurement_id = m.id

//////TODO - Search 'like' what is typed in

  $id = $_GET["id"];
  $db = getDb();
  //Original - 
  $Stmt = $db->prepare('SELECT * FROM db.recipe WHERE id= :id');
  //call recipe data
  //Original - $Stmt = $db->prepare('SELECT (title, instructions, author) FROM db.recipe WHERE id= :id');
  $Stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $Stmt->execute();
  $recipe = $Stmt->fetch(PDO::FETCH_ASSOC);
  
  //call ingredient data
  /*$Stmt = $db->prepare('
    SELECT ingredient, qty, measurement_id 
    FROM db.ingredient     
    WHERE recipe_id = :id');
  $Stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $Stmt->execute();
  $ingredient = $Stmt->fetch(PDO::FETCH_ASSOC);
  */

  //call measurement data
  /*$Stmt = $db->prepare('
    SELECT measurement 
    FROM db.measurement     
    WHERE id = :id');
  $Stmt->bindParam(':id', $ingredient["measurement_id"], PDO::PARAM_INT);
  $Stmt->execute();
  $ingredient = $Stmt->fetch(PDO::FETCH_ASSOC);
    */

  //Title
  echo '<h1>Title: ' . $recipe["title"] . '</h1><br><br><div class="dIngr"><ul>';

  //ingredients - bulleted - qty - measurement
  //foreach ($recipe["ingredient"] as $ingr)
  //echo '<li>' . $ingr["qty"] . ' ' . $ingr["measurement"] . ' - ' . $ingr["ingredient"] . '<li>'
  
  //test join...
  //var_dump($recipe);

  //instructions
  echo '</ul></div><br><p>Instructions:<br>' . $recipe["instructions"] . '</p><br>';

  //TODO - notes from user


  //TODO - button - create user note
  ?>
</body>
<footer>
  <br>
  <hr>
  <a href="../Wk02Home.php">Sam's Homepage</a>
</footer>
</html>