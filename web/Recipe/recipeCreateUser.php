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

$dname = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$pswrd = password_hash($_POST['pswrd'], PASSWORD_DEFAULT);

$query = 'INSERT INTO db.author (name, username, pswrd) VALUES (:dname, :username, :pswrd)';
$statement = $db->prepare($query);
$statement->bindValue(':dname', $dname);
$statement->bindValue(':username', $username);
$statement->bindValue(':pswrd', $pswrd);
$statement->execute();


header('Location: recipeHome.php');
die();

?>