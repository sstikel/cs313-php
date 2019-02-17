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
  $aPost = htmlspecialchars($_POST);
  //loop $ingredient_$count
  $count = 0;
  foreach ($aPost as $post) {
    $count += 1;
    if (array_key_exists("ingredient_$count", $post)) {
      $ingredient_$count = $post["ingredient_$count"];
    }
    //echo "<script>alert('for each worked')</script>"
  }

  require_once ('../generalFiles/dbAccess.php');
  $db = getDb();

  //insert data
  $query = 'SELECT id, title, author_id, instructions FROM db.recipe';
  $statement = $db->prepare($query);
  $statement->execute();
  $recipes = $statement->fetchAll(PDO::FETCH_ASSOC);




  //get id to redirect page
  $query = 'SELECT id, title, author_id, instructions FROM db.recipe';
  $statement = $db->prepare($query);
  $statement->execute();
  $recipes = $statement->fetchAll(PDO::FETCH_ASSOC);
  $id = $recipe["id"];


  flush();
  header("Location:recipeDetail.php?$id");//TODO - edit id...
  die();
?>