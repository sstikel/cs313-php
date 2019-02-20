<?php
/****************************************
*Doc: recipeLogout.php
*Author: Sam Gay
*Date: 2/20/19
*Purpose: log user out
****************************************/

start_session();

session_destroy();
header('Location: /recipe/recipeHome.php');

?>