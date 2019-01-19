<!DOCTYPE html>
<html>
  <head>
    <title>Home-SamG-CS313</title>
<div id="entire">    

    <!--TODO External Stylesheet-->
    <!--TODO Include colors, images, personality, creativity (keep professional)-->
    <link rel="stylesheet" type="text/css" href="Wk02SS.css"><!--TODO Alter so it works on Heroku-->
    
    <!--TODO Add something dynamic (mouse-overs, on-click, on-change, etc)-->
    
    <script src="Wk02JS.js"></script><!--TODO Alter so it works on Heroku-->
  </head>

  <header>
    <!--Heading-->
    
    
      <?php include 'Wk02Header.php';?>
    

    <!--I would like a menu along the top-->
    <div class="topMenu">
    <?php include 'Wk02TopMenu.php'; ?>
    </div>
  </header>
  <hr>

  <body>
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
    <div class="dImages">
      <table>
        <tr><td><img id="imgSamLiz" src="SamLiz.jpg" alt="Sam and Liz">My wife and I shortly before we were married.</td></tr>
        <tr><td><img id="imgHiking" src="Hiking.jpg" alt="Hiking">One of my favorite trails in AZ with my brothers and a friend.</td></tr>
        <tr><td><img id="imgBallet" src="Ballet.jpg" alt="Ballet">From the many years I danced ballet, this is one of my proudest moments.</td></tr>
      </table>
    </div>
  </body>

  <hr>
  <footer>
  <a href="https://www.linkedin.com/in/samuel-gay-69522490/">LinkedIn</a>, <a href="https://github.com/sstikel">GitHub</a>
  <br>
  <button onclick="benignFunction()">No Touch</button>
  </footer>
</div>  

</html>


<!--TODO Change file to PHP-->
<!--TODO Add PHP content-->

<!--TODO Make sure JS and CSS pages make it to server-->


<!---->