<?php
  /******************************************
   * Doc: recipeAdd.php
   * Author: Sam Gay
   * Date: 2/16/19
   * Purpose: insert new recipe into db
   * 
   ******************************************/

  $title = htmlspecialchars($_POST['title']);
  $author = htmlspecialchars($_POST['author']);
  $instructions = htmlspecialchars($_POST["instructions"]);
  
  //loop $ingredient_$count
  
  foreach ($_POST as $post) {
    $count = 0;
    $count += 1;
    if (array_key_exists("ingredient_$count", $post)) {
      $ingredient_ . $count = htmlspecialchars($post["ingredient_" . $count]);
    }
    //echo "<script>alert('for each worked')</script>"
  }

  require_once ('../generalFiles/dbAccess.php');
  $db = getDb();

  //insert data
  //measurement
  //ingredients
  //author
  $author_id = "00 Buck"
  
  //recipe
  $query = 'INSERT INTO  db.recipe(title, author_id, instructions) VALUES(:title, :author_id, :instructions)';
  $statement = $db->prepare($query);
  $statement->bindValue(':title', $title, PDO::PARAM_STR);
  $statement->bindValue(':author_id', $author_id, PDO::PARAM_STR);
  $statement->bindValue(':instructions', $instructions, PDO::PARAM_STR);
  $statement->execute();





  //get id to redirect page
  // $query = 'SELECT id, title, author_id FROM db.recipe WHERE title = :title'; // . ' and author = ' . $author; //make more specific current recipe
  // $statement = $db->prepare($query);
  // $Stmt->bindParam(':title', $title, PDO::PARAM_INT);
  // $statement->execute();
  // $recipes = $statement->fetchAll(PDO::FETCH_ASSOC);
  // $id = $recipe["id"];


  flush();
  header("Location:recipeDetail.php?id=1");//$id");//TODO - edit id...
  die();
?>