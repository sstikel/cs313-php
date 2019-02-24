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
  
  $ingredient_1 = $_POST['ingredient_1'];
  $ingredient_2 = $_POST['ingredient_2'];
  $ingredient_3 = $_POST['ingredient_3'];
  $ingredient_4 = $_POST['ingredient_4'];

  $qty_1 = $_POST['qty_1'];
  $qty_2 = $_POST['qty_2'];
  $qty_3 = $_POST['qty_3'];
  $qty_4 = $_POST['qty_4'];

  $measurement_id_1 = $_POST['measurement_id_1'];
  $measurement_id_2 = $_POST['measurement_id_2'];
  $measurement_id_3 = $_POST['measurement_id_3'];
  $measurement_id_4 = $_POST['measurement_id_4'];

  // $ingredients[0] = 0;
  // $qty[0] = 0;
  // $measurement_id[0] = 0;


  // $count = 0;
  //loop $ingredient_$count
  // foreach ($_POST as $post) {
  //   if ($post['title'] || $post['instructions']) {
      
  //   }
  //   // if ($post['ingredient']) {}
  //   // if ($post['qty']) {}
  //   // if ($post['measure_id']) {}
  //   else {
  //     $count += 1;
  //     $post_ingredient = htmlspecialchars($_POST['ingredient_' . $count]);
  //     $post_qty = $_POST['qty_' . $count];
  //     $post_measure_id = $_POST['measurement_id_' . $count];

  //     //add to arrays
  //     $ingredients[$count] = $post_ingredient;
  //     $qty[$count] = $post_qty;
  //     $measurement_id[$count] = $post_measurement_id;
  //   }
  // }
  

  //insert data

  //recipe
  $query = 'INSERT INTO  db.recipe(title, author_id, instructions) VALUES(:title, :author_id, :instructions)';
  $statement = $db->prepare($query);
  $statement->bindValue(':title', $title, PDO::PARAM_STR);
  $statement->bindValue(':author_id', $author_id, PDO::PARAM_STR);
  $statement->bindValue(':instructions', $instructions, PDO::PARAM_STR);
  $statement->execute();

  //query recipe_id
  $query = 'SELECT id FROM db.recipe WHERE title=:title AND author_id=:author_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':author_id', $author_id, PDO::PARAM_STR);
  $statement->bindValue(':title', $title, PDO::PARAM_STR);
  $statement->execute();
  $recipe_id = $statement->fetch(PDO::FETCH_ASSOC);
  $recipe_id = $recipe_id['id'];

  //ingredients
  
  // for($i=1; $i<=$count; $i++) {
  //   $query = 'INSERT INTO  db.ingredient(ingredient, qty, measurement_id, recipe_id) VALUES(:ingredient, :qty, :measurement_id, :recipe_id)';
  //   $statement = $db->prepare($query);
  //   $statement->bindValue(':ingredient', $ingredients[$i], PDO::PARAM_STR);
  //   $statement->bindValue(':measurement_id', $measurement_id[$i], PDO::PARAM_STR);
  //   $statement->bindValue(':recipe_id', $recipe_id, PDO::PARAM_STR);
  //   $statement->bindValue(':qty', $qty[$i], PDO::PARAM_STR);
  //   $statement->execute();
  // }

  $query = 'INSERT INTO  db.ingredient(ingredient, qty, measurement_id, recipe_id) VALUES(:ingredient, :qty, :measurement_id, :recipe_id)';
    $statement = $db->prepare($query);
    $statement->bindValue(':ingredient', $ingredient_1, PDO::PARAM_STR);
    $statement->bindValue(':measurement_id', $measurement_id_1, PDO::PARAM_STR);
    $statement->bindValue(':recipe_id', $recipe_id, PDO::PARAM_STR);
    $statement->bindValue(':qty', $qty_1, PDO::PARAM_STR);
    $statement->execute();
   
    $query = 'INSERT INTO  db.ingredient(ingredient, qty, measurement_id, recipe_id) VALUES(:ingredient, :qty, :measurement_id, :recipe_id)';
    $statement = $db->prepare($query);
    $statement->bindValue(':ingredient', $ingredient_2, PDO::PARAM_STR);
    $statement->bindValue(':measurement_id', $measurement_id_2, PDO::PARAM_STR);
    $statement->bindValue(':recipe_id', $recipe_id, PDO::PARAM_STR);
    $statement->bindValue(':qty', $qty_2, PDO::PARAM_STR);
    $statement->execute();

    $query = 'INSERT INTO  db.ingredient(ingredient, qty, measurement_id, recipe_id) VALUES(:ingredient, :qty, :measurement_id, :recipe_id)';
    $statement = $db->prepare($query);
    $statement->bindValue(':ingredient', $ingredient_3, PDO::PARAM_STR);
    $statement->bindValue(':measurement_id', $measurement_id_3, PDO::PARAM_STR);
    $statement->bindValue(':recipe_id', $recipe_id, PDO::PARAM_STR);
    $statement->bindValue(':qty', $qty_3, PDO::PARAM_STR);
    $statement->execute();

    $query = 'INSERT INTO  db.ingredient(ingredient, qty, measurement_id, recipe_id) VALUES(:ingredient, :qty, :measurement_id, :recipe_id)';
    $statement = $db->prepare($query);
    $statement->bindValue(':ingredient', $ingredient_4, PDO::PARAM_STR);
    $statement->bindValue(':measurement_id', $measurement_id_4, PDO::PARAM_STR);
    $statement->bindValue(':recipe_id', $recipe_id, PDO::PARAM_STR);
    $statement->bindValue(':qty', $qty_4, PDO::PARAM_STR);
    $statement->execute();

  flush();
  //header("Location:recipeDetail.php?id=$recipe_id");
  header("Location:recipeHome.php");
  die();
?>