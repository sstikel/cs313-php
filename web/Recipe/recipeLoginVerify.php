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
  $username = htmlspecialchars($_POST['username']);
  $pswrd = $_POST['pswrd'];

  $query = $db->query("SELECT username, pswrd, name, id FROM db.author WHERE username = '".$username."'");


  foreach ($query as $q) {
    if (password_verify($pswrd, $q['pswrd'])) {
      //set session variables
      $_SESSION['name'] = $q['name'];
      $_SESSION['user_id'] = $q['id'];
      header('Location: recipeHome.php');
      die();
    }   
  }
  header('Location: recipeLogin.php?fail=true');
  die();
}
catch (Exception $e) {
  echo "error... $e";
  die();

}
?>