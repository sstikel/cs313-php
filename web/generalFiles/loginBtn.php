<?php
    /****************************************
     * Document: loginBtn.php
     * Author: Sam Gay
     * Date: 2/9/19
     * Purpose: Populates login button or logout button
     * logged in
     ****************************************/

     session_start();
     require '../generalFiles/dbAccess.php';

     if ($_SESSION["login"] == false) {
        echo '<button id="btnLogin" onclick="login(1)">Login</button>';
     }
     else {
        echo '<button id="btnLogout" onclick="login(0)">Logout</button>';
     }
?>