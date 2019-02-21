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

$name = htmlspecialchars($_POST['name']);
$username = htmlspecialchars($_POST['username']);
$pswrd = password_hash($_POST['pswrd'], PASSWORD_DEFAULT);

$query = 'INSERT INTO db.author (name, username, pswrd) VALUES (:name, :username, :pswrd);';
$statement = $db->prepare($query);
$statement->bindValue(':name', $name);
$statement->bindValue(':username', $username);
$statement->bindValue(':pswrd', $pswrd);
$statement->execute();


header('Location: recipeHome.php');

?>