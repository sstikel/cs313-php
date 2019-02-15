<?php
/*****************************************
*recipeDetail.php
*Author: Sam Gay
*Date: 2/7/19
*Purpose: show user recipe information from database
*         i.e. ingredients, measurments, instructions, author, 
               notes (if signed in user that has made notes about given recipe)
*****************************************/

  session_start();
  require_once ('../generalFiles/dbAccess.php');
  $db = getDb();

  $recipe_id = htmlspecialchars($_GET["id"]);
  
  //recipe table
  //id, title, author_id, instructions
  $query = 'SELECT id, title, author_id, instructions FROM db.recipe WHERE id= :id';
  $Stmt = $db->prepare($query);
  $Stmt->bindParam(':id', $recipe_id, PDO::PARAM_INT);
  $Stmt->execute();
  $recipe = $Stmt->fetch(PDO::FETCH_ASSOC);
  
  $title = $recipe['title'];
  $author_id = $recipe['author_id'];
  $instructions = $recipe['instructions'];

  //ingredient table
  //id, ingredient, qty, measurement_id, recipe_id
  $query = 'SELECT id, ingredient, qty, measurement_id FROM db.ingredient WHERE recipe_id= :id';
  $Stmt = $db->prepare($query);
  $Stmt->bindParam(':id', $recipe_id, PDO::PARAM_INT);
  $Stmt->execute();
  $ingredients = $Stmt->fetchAll(PDO::FETCH_ASSOC);

  //measurement table
  //id, measurement
  $query = 'SELECT id, measurement FROM db.measurement';
  $Stmt = $db->prepare($query);
  $Stmt->execute();
  $m = $Stmt->fetchAll(PDO::FETCH_ASSOC);
  $measurements = array($m[0]=>$m[1], $m[3]=>$m[4], $m[5]=>$m[6], $m[7]=>$m[8], $m[9]=>$m[10],
  $m[11]=>$m[12], $m[13]=>$m[14], $m[15]=>$m[16], $m[17]=>$m[18], $m[19]=>$m[20]);

  //author table
  //id, name, username, pswrd
  $query = 'SELECT id, username FROM db.author WHERE id= :id';
  $Stmt = $db->prepare($query);
  $Stmt->bindParam(':id', $author_id, PDO::PARAM_INT);
  $Stmt->execute();
  $author = $Stmt->fetch(PDO::FETCH_ASSOC);

 

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
  <?php
  //Display Recipe
  //Title
  echo "<h1>Title: $title</h1><br>";

  //ingredients - bulleted - qty - measurement
  echo "<h4>Ingredients</h4>";
  echo "<ul><div id='dIngredients'>"; //TODO - May want to format in a <table>
  foreach ($ingredients as $ingredient_item) {
    $ingredient = $ingredient_item['ingredient'];
    $qty = $ingredient_item['qty'];
    $m_id = $ingredient_item['measurement_id'];
    $measurement = $measurements["$m_id"];//TODO FIRST - it is printing an array to screen
    var_dump($measurement);
    echo "<li>$qty $measurement - $ingredient</li>";
  }
  echo "</div></ul><br>";

  //instructions
  echo "<p><h4>Instructions:</h4>";
  echo "<br>$instructions</p><br>";

  //TODO - notes from user


  //TODO - button - create user note
  ?>

  <br>
</body>
<footer>
  <hr>
  <a href="../Wk02Home.php">Sam's Homepage</a>
</footer>
</html>