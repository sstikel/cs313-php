<?php
/*****
 * Doc: recipeLoginVerify.php
 * Author: Sam Gay
 * Date: 2/20/19
 * Purpose: verify submitted username and password
 */

session_start();

require_once ('../generalFiles/dbAccess.php');
$db = getDb();

try {
  $username = $_POST['username'];
  $pswrd = $_POST['pswrd'];

  //$query = $db->query("SELECT username, pswrd, name, id FROM db.author");


 // foreach ($query as $q) {
   foreach ($db->query("SELECT username, pswrd, name, id FROM db.author WHERE username ='".$username."'") as $q)
    if (password_verify($pswrd, $q['pswrd'])) {
      //set session variables
      $_SESSION['name'] = $q['name'];
      $_SESSION['user_id'] = $q['id'];
      header('Location: /recipe/recipeHome.php');
    }
    else
      header('Location: /recipe/recipeLogin.php?fail=true');
  }
}
catch (Exception $e) {
  echo "error... $e";
  die();

}
?>