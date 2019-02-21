<?php
/***
 * Doc: recipeNewUser.php
 * Author: Sam Gay
 * Date: 2/20/19
 * Purpose: Collect new user data based on user input and send to be stored
 */

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
  <title>Recipe Create User</title>
</head>
<body>
  <form action="" method="post">
    Name:<br><input type="text" name="name"><br>
    Username:<br><input type="text" name="username"><br>
    Password:<br><input type="password" name="pswrd"><br>
    <input type="submit" value="Create User">
  </form>
</body>
</html>