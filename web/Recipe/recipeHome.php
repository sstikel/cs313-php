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

  $query = 'SELECT id, measurement FROM db.measurement';
  $statement = $db->prepare($query);
  $statement->execute();
  $measurements = $statement->fetchAll(PDO::FETCH_ASSOC);

    
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
  <br>

  <!--Insert recipe - form-->
  <div class="userSignedIn" id="dfAdd">
  <form action="recipeAdd.php" method="post">
    Title: <input type="text" name="title">
    <input type="hidden" name ="author" value=""><br> <!--use php to insert user info-->
    <table>
      <tr><th>Ingredients:</th><th>Quantity</th><th>Measurment</th></tr>
      <?php
      $measurement_select = array(
      "<option value='' disabled selected>Choose...</option>",
      "<option value='1'>Teaspoon</option>",
      "<option value='2'>Tablespoon</option>",
      "<option value='3'>Cup</option>",
      "<option value='4'>Ounce (fl)</option>",
      "<option value='5'>Pint</option>",
      "<option value='6'>Quart</option>",
      "<option value='7'>Gallon</option>",
      "<option value='8'>Ounce (mass)</option>",
      "<option value='9'>Pound</option>",
      "<option value='10'>Qty</option>");

      for ($i=0; $i<=3;$i++) {
        echo '<tr><td><input type="text" name="ingredient"></td>';
        echo '<td><input type="number" name="qty"></td>';
        echo '<td></td><select name="measurement_id">';
        foreach ($measurement_select as $m) {
          echo $m;
        }
        echo '</tr>';
      }
      

    
      
      ?>
    </table>
  </form>
  </div>

  <br>
</body>
<footer>
  <hr>
  <a href="../Wk02Home.php">Sam's Homepage</a>
</footer>
</html>