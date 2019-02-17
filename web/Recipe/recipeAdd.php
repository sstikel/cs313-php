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
  foreach ($aPost as $post) {
    //if ($post[0] != and $post[0] !=)
    echo "<script>alert('for each worked')</script>"
  }

?>