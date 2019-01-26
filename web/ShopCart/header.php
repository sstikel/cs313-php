<?php
  //page header
  session_start();
  
  //page name
  echo "<div id='hName'><h2>Shovel Depot</h2></div>";

  //shopping cart
  if ($_SESSION == null) {
    $_SESSION = array("Empty", 0);

  }
  else {
    echo "Your Cart has <a href=''> <div id='cartNum'>0</div> items</a>";
  }
?>