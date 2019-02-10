<?php
/*****************************************
 *Document recipeLogin.php
 *Author: Sam Gay
 *Date: 2/9/19
 *Purpose: Login or register page for users
 *****************************************/

session_start();
require '../generalFiles/dbAccess.php';



//verify login info
function login(){
    //compare credentials
    $username = $_GET["username"];
    $db = getDb();
    $Stmt = $db->prepare('SELECT * FROM db.author WHERE username= :username');
    $Stmt->bindParam(':username', $username, PDO::PARAM_INT);
    $Stmt->execute();
    $author = $Stmt->fetch(PDO::FETCH_ASSOC);


    //Pass - login
    foreach ($author as $a) {
        if ($a["username"] ==$_GET["username"] && $a["pswrd"] ==$_GET["pswrd"]) {
            $_SESSION["login"] = true;
            header('Location: /recipe/recipeHome.php');
        }
    }

    //False - redirect to login page
    echo "<script type='text/javascript'>alert('User not found. Please log in agaian.');</script>";
    header('Location: /recipe/recipeLogin.php');
}

//register new user
function register(){
   /* $id = $_GET[""];
    $db = getDb();
    $Stmt = $db->prepare('INSERT INTO (name, username, pswrd) db.author VALUES ($_GET["name"], $_GET["username"], $_GET["pswrd"]) WHERE');
    $Stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $Stmt->execute();
    $author = $Stmt->fetch(PDO::FETCH_ASSOC); */
    //then login...
}

//logout
function logout(){
    session_unset();
    session_destroy();
    $_SESSION["login"] = false;
    header('Location: /recipe/recipeHome.php');
}

if (isset($_GET["logout"])) {
    logout();
}
else if (isset($_GET["register"])){
    register();
}
else if (isset($_GET["login"])){
    login();
}
else
    break;


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
            Username: <input type="text" name="username"><br>
            <!--password-->
            Password: : <input type="text" name="pswrd"><br>
            <input type="submit">
        </form>
    </div>

    <div id="divNewForm" hidden>
        <form action="" method="post">
            <!--User info-->
            Name: : <input type="text"><br>
            Username: : <input type="text"><br>
            Password: : <input type="text"><br>
           <!-- Confirm Password: : <input type="text"><br> -->
            <input type="submit">
        </form>
    </div>
    
</body>
</html>

<?php
   

?>