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

  if (isset($_SESSION)) {
    $user_id = $_SESSION['id'];
    $user_name = $_SESSION['name'];
  }
    
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
    <title>Recipe Home</title>
</head>
<header>
  <h1>Recipe Home</h1>

  <!--Sign in button-->
  <?php  
    if (isset($user_name)) {
      echo "Welcome $user_name. <a href='recipeLogout.php'>Logout</a>";
    }
    else {
      echo "<a href='recipeLogin.php'>Login</a>";
    }
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
      $recipe_id = $recipe['id'];

      echo "<li><a href='recipeDetail.php?id=$recipe_id'>$title</a><li><br>";
    }
    
  ?>
  <ul>
  <br>

  <!--Insert recipe - form-->
  <div class="userSignedIn" id="dfAdd">
    <form action="recipeAdd.php" method="post">
      Title: <input type="text" name="title">
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

        $count = 0;
        for ($i=0; $i<=3;$i++) {
          $count += 1;
          $name_i = "ingredient_$count";
          $qty_i = "qty_$count";
          $measurement_id_i = "measurement_id_$count";
          echo "<tr><td><input type='text' name=$name_i></td>";
          echo "<td><input type='number' name=$qty_i></td>";
          echo "<td><select name=$measurement_id_i>";
          foreach ($measurement_select as $m) {
            echo $m;
          }
          echo '</td></tr>';
        }
        //TODO - IDEA - enclose this in a function 
        //do...while(count<3)
        //easier to call when I need more ingredient rows     
        ?>
        
      </table>
      Instructions: <textarea name="instructions"></textarea>
      <input type="submit" value="Share Recipe">
    </form>
  </div>

  <br>
  <hr>
</body>
<footer>
  <a href="../Wk02Home.php">Sam's Homepage</a>
</footer>
</html>