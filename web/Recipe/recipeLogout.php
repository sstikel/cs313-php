<?php
/****************************************
*Doc: recipeLogout.php
*Author: Sam Gay
*Date: 2/20/19
*Purpose: log user out
****************************************/

session_start();

session_unset();
session_destroy();
header('Location: recipeHome.php');
die();

?>