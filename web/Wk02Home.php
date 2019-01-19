<!DOCTYPE html>
<html>
  <head>
    <title>Home-SamG-CS313</title>
    
    <!--TODO External Stylesheet-->
    <!--TODO Include colors, images, personality, creativity (keep professional)-->
    <link rel="stylesheet" type="text/css" href="Wk02SS.css"><!--TODO Alter so it works on Heroku-->
    
    <!--TODO Add something dynamic (mouse-overs, on-click, on-change, etc)-->
    
    <script src="Wk02JS.js"></script><!--TODO Alter so it works on Heroku-->
  </head>

  <header>
    <!--Heading-->
    <div class="flexing">
    
      <?php include 'Wk02Header.php';?>
    

    <!--I would like a menu along the top-->
<!--    <div class="topMenu"> -->
    <?php include 'Wk02TopMenu.php'; ?>
    <!--/div-->
    </div>
  </header>
  <hr>

  <body>
    <div class="flexing">
    <!--TODO Add image (or more)-->
    <img id="imgProfile" src="BlueShirt.png" alt="Sam Gay">
    <p id="bio">
      <strong>Name: Sam Gay<strong><br>
      Hometown: Sahuarita, AZ<br>
      Major: Software Engineering (2020)<br>
      Interests:Sam loves most anything in the outdoors; whether it be hiking, backpacking, shooting, camping, water skiing, etc.<br>
      Goals: Find a software job, get paid, have kids, take kids hiking.<br>
    </p>
    </div>
    <div id="dImages">
      <table>
        <div class="flexing">
        <div><tr><td><img src="SamLiz.jpg" alt="Sam and Liz"></td><td>My wife and I shortly before we were married.</td></tr></div>
        <div><tr><td><img src="Hiking.jpg" alt="Hiking"></td><td>One of my favorite trails in AZ with my brothers and a friend.</td></tr></div>
        <div><tr><td><img src="Ballet.jpg" alt="Ballet"></td><td>From the many years I danced ballet, this is one of my proudest moments.</td></tr></div>
      </table>
    </div>
  </body>

  <hr>
  <footer>
  <a href="https://www.linkedin.com/in/samuel-gay-69522490/">LinkedIn</a>, <a href="https://github.com/sstikel">GitHub</a>
  </footer>
  
</html>


<!--TODO Change file to PHP-->
<!--TODO Add PHP content-->

<!--TODO Make sure JS and CSS pages make it to server-->


<!---->