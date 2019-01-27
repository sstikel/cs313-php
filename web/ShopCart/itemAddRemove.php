<?php
  session_start();
  $_SESSION[] = array("folding", 0, 11); 
  $_SESSION[] = array("spade", 0, 12);
  $_SESSION[] = array("transfer", 0, 13);
  $_SESSION[] = array("trench", 0 , 14);
  $_SESSION[] = array("snow", 0, 15);
  $_SESSION[] = array("power", 0, 50000);

  $q = $_REQUEST["q"];
  $search = false;
  $cartNum = 0;

  if ($q !== "") {
      $q = strtolower($q);
      $length = strlen($q);

  }

  /////////////////////add item to cart/////////////////////////
  //check for same item - 
  foreach ($_SESSION as $a) {
      //add to it if found
      if ($q == $a[0]) {
        $search = true;
        $a[1] += 1;
        $cartNum += 1;
      }
      
  }
  
  //make new item array if none found
  if ($search == false) {
    $_SESSION = array($q, 1, 0);
    $cartNum += 1;
 }

 
  ///////////////////remove item from cart////////////////////////


  //return a status
  echo $cartNum;

?>