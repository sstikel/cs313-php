<?php
/**************************************
 * Doc: recipeCreateUser.php
 * Author: Sam Gay
 * Date: 2/21/19
 * Purpose: insert new user input in to db
 * 
 **************************************/

session_start();

require_once ('../generalFiles/dbAccess.php');
$db = getDb();

$dname = $_POST['name'];
$username = $_POST['username'];
$pswrd = password_hash($_POST['pswrd'], PASSWORD_DEFAULT);

try {
  $query = 'INSERT INTO db.author (name, username, pswrd) VALUES (:dname, :username, :pswrd)';
  $statement = $db->prepare($query);
  $statement->bindValue(':dname', $dname);
  $statement->bindValue(':username', $username);
  $statement->bindValue(':pswrd', $pswrd);
  $statement->execute();
}
catch (Exception $e) {
  echo "db error... $e";
  die();
}

header('Location: recipeHome.php');
die();

?>