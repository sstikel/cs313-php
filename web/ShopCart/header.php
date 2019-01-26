<?php
  //page header
  session_start();
  $_SESSION = array("Empty", 0);
  
  //page name
  echo "<div id='hName'><h2>Shovel Depot</h2></div>";

  //shopping cart
  echo "Your Cart has <a href=''>$_SESSION[0][1] items</a>";
?>