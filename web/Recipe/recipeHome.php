<?php
 /*******************************
 *
 * Home page
 * Search features at top
 * General list of recipes below (make it limited - maybe the most popular...)
 * sign in
 * 
 *******************************/ 

  session_start();
  require_once ('../generalFiles/dbAccess.php');
  $db = getDb();

  $query = 'SELECT id, title, author_id, instructions FROM db.recipe';
  $statement = $db->prepare($query);
  $statement->execute();
  $recipes = $statement->fetchAll(PDO::FETCH_ASSOC);

  
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/gif/png" href="../generalImg/sicon.png"> <!--add to all other pages-->
    <link rel="stylesheet" type="text/css" href="../generalFiles/generalSS.css">
    <script type="text/javascript" src="../generalFiles/generalJS.js"></script>
    <title>Recipe Home</title>
</head>
<header>
  <h1>Recipe Home</h1>

  <!--Sign in button-->
  <?php
    //require ('../generalFiles/loginBtn.php');
  ?>

  <hr>
  <br>
</header>
<body>
  <!--Search Recipes-->
  <!--
  <form action="recipeDetail.php" method="get">
    Recipe Search: <input type="text" name="title">
    <input type="submit" value="Search Recipes">  
  </form>
-->
  <!--List recipes-->
  <ul>
  <?php
    foreach ($recipes as $recipe) {
      $title = $recipe['title'];
      $id = $recipe['id'];

      echo "<li><a href='recipeDetail.php?id=$id'>$title</a><li><br>";
    }
    
  ?>
  <ul>

</body>
<footer>
  <br>
  <hr>
  <a href="../Wk02Home.php">Sam's Homepage</a>
</footer>
</html>