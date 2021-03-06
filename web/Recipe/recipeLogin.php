<?php
/*************************************************
 * Doc: recipeLogin.php
 * Author: Sam Gay
 * Date: 2/20/19
 * Purpose: login user to site
 * 
 *************************************************/

 session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/gif/png" href="../generalImg/sicon.png">
  <link rel="stylesheet" type="text/css" href="../generalFiles/generalSS.css">
  <script type="text/javascript" src="../generalFiles/generalJS.js"></script>
  <title>Recipe Login</title>
</head>
<body>
  <!--error handling - front/backend-->
  <!--error message - recipeLoginVerify returns fail=true-->
 <?php  
    if ($_GET['fail'] == true) {
      echo '<p>The username and password inputted do not match. Please try again.</p>';
    }
  ?>
  <form action="recipeLoginVerify.php" method="post">
    Username:<br><input type="text" name="username" autofocus><br>
    Password:<br><input type="password" name="pswrd"><br>
    <input type="submit" value="login">
  </form>
  <br>
  <a href="recipeNewUser.php">Create User</a>

</body>
</html>