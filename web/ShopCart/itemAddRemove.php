<?php
  session_start();
  $q = $_REQUEST["q"];
  $search = false;
  $cartNum = 0;

  if (global $q !== "") {
      global $q = strtolower($q);
      global $length = strlen($q);

  }

  /////////////////////add item to cart/////////////////////////
  //check for same item - 
  foreach ($_SESSION as $a) {
      //add to it if found
      if (global $q == $a[0]) {
        global $search = true;
        global $a[1] += 1;
        global $cartNum += 1;
      }
      
  }
  
  //make new item array if none found
  if (global $search == false) {
    global $_SESSION = array($q, 1, 0);
    global $cartNum += 1;
 }

 
  ///////////////////remove item from cart////////////////////////


  //return a status
  echo $cartNum;

?>