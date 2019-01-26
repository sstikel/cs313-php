<?php
  session_start();
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