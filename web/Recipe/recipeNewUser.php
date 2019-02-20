<?php
/***
 * Doc: recipeNewUser.php
 * Author: Sam Gay
 * Date: 2/20/19
 * Purpose: Create new user based on user input and store to db
 */

 session_start();

 require_once ('../generalFiles/dbAccess.php');
 $db = getDb();




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
  <title>Recipe Create User</title>
</head>
<body>
  <form action="" method="post">
    Name:<br><input type="text" name="name">
    Username:<br><input type="text" name="username">
    Password:<br><input type="password" name="pswrd">
    <br>
    <input type="submit" value="Create User">
  </form>
</body>
</html>