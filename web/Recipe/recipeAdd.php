<?php
  /******************************************
   * Doc: recipeAdd.php
   * Author: Sam Gay
   * Date: 2/16/19
   * Purpose: insert new recipe into db
   * 
   ******************************************/
  session_start();
  require_once ('../generalFiles/dbAccess.php');
  $db = getDb();

  $author_id = $_SESSION['user_id'];

  $title = htmlspecialchars($_POST['title']);
  $instructions = htmlspecialchars($_POST["instructions"]);
  
  $ingredients = array();
  $qty = array();
  $measurement_id = array();


  $count = 0;
  //loop $ingredient_$count
  foreach ($_POST as $post) {
    $count += 1;
    $post_ingredient = htmlspecialchars($_POST['ingredient_' . $count]);
    $post_qty = $_POST['qty_' . $count];
    $post_measure_id = $_POST['measurement_id_' . $count];

    //add to arrays
    $ingredients[$count] = $post_ingredient;
    $qty[$count] = $post_qty;
    $measurement_id[$count] = $post_measurement_id;
  }
  

  //insert data

  //recipe
  $query = 'INSERT INTO  db.recipe(title, author_id, instructions) VALUES(:title, :author_id, :instructions)';
  $statement = $db->prepare($query);
  $statement->bindValue(':title', $title, PDO::PARAM_STR);
  $statement->bindValue(':author_id', $author_id, PDO::PARAM_STR);
  $statement->bindValue(':instructions', $instructions, PDO::PARAM_STR);
  $statement->execute();

  //ingredients
  
  for(i=1; i<$count; i++) {
    $query = 'INSERT INTO  db.ingredient(ingredient, qty, measurement_id, recipe_id) VALUES(:ingredient, :qty, :measurement_id, :recipe_id)';
    $statement = $db->prepare($query);
    $statement->bindValue(':ingredient', $ingredient[i], PDO::PARAM_STR);
    $statement->bindValue(':measurement_id', $measurement_id[i], PDO::PARAM_STR);
    $statement->bindValue(':recipe_id', $recipe_id, PDO::PARAM_STR);
    $statement->bindValue(':qty', $qty[i], PDO::PARAM_STR);
    $statement->execute();
  }

  flush();
  header("Location:recipeDetail.php?id=$recipe_id");//$id");//TODO - edit id...
  die();
?>