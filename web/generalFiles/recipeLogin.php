<?php
/*****************************************
 *Document recipeLogin.php
 *Author: Sam Gay
 *Date: 2/9/19
 *Purpose: Login or register page for users
 *****************************************/

session_start();
require '../generalFiles/dbAccess.php';






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

    <!--determine kind of user-->
    <select onchange="selectForm(this.value)">
        <option value="return">Returning User</option>
        <option value="new">New User</option>
    </select>

    <!--present appropriate form - login or register-->
    <div id="divReturnForm" hidden>
        <form action="" method="post">
            <!--Username-->
            Username: <input type="text" id="loginUsername"><br>
            <!--password-->
            Password: : <input type="text" id="loginPassword"><br>
            <input type="submit">
        </form>
    </div>

    <div id="divNewForm" hidden>
        <form action="" method="post">
            <!--User info-->
            Name: : <input type="text"><br>
            Username: : <input type="text"><br>
            Password: : <input type="text"><br>
            Confirm Password: : <input type="text"><br>
            <input type="submit">
        </form>
    </div>
    
</body>
</html>

<?php
    //verify login info


    //register new user
    

?>