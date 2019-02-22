<?php
/*****
 * Doc: recipeLoginVerify.php
 * Author: Sam Gay
 * Date: 2/20/19
 * Purpose: verify submitted username and password
 */

start_session();

require_once ('../generalFiles/dbAccess.php');
$db = getDb();

$user = $_POST['username'];
$pswrd = $_POST['pswrd'];
$query = $db->query("SELECT username, pswrd, name, id FROM db.author 
          WHERE username = '" . $user . "'");

try {
  foreach ($query as $q) {
    if (password_verify($pswrd, $q)) {
      //set session variables
      $_SESSION['name'] = $q['name'];
      $_SESSION['user_id'] = $q['id'];
      header('Location: /recipe/recipeHome.php')
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