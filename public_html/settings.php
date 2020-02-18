<?php

$password = "password";

if ("password" == $password) {

?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="./css/animate.css">
      <link rel="icon"
      type="image/png"
      href="./images/earthboxicon.png" />
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body style onload="readIP()">
      <nav class="teal" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="incubator.php" class="brand-logo">🌎 Settings</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="incubator.php">Dashboard</a></li>
          </ul>
          <ul class="right hide-on-med-and-down">
            <li><a href="settings.html">Settings</a></li>
          </ul>

          <ul id="nav-mobile" class="sidenav" style="transform: translateX(-105%);">
            <li><a href="incubator.php">Dashboard</a></li>
            <li><a href="settings.html">Settings</a></li>
          </ul>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
      </nav>
      <p></p>

      <div align="center" class="animated fadeIn delay-1s">EarthBOX IP:<p id="incubatorBoxIPdisplay">x.x.x.x</p></div>
      <!--
      <div align="center" class="animated fadeIn delay-1s">This Device's Public IP:<p id="publicIPdisplay">IP NOT FOUND!</p></div>
      -->
      <div align="center" class="animated fadeIn delay-1s">
        <a class="waves-effect waves-light btn" onclick="showStartupTips();">Show Startup Tips</a>&nbsp;<a class="waves-effect waves-light btn" onclick="dismissAlert();">Hide Startup Tips</a>
      </div>

      <p></p>
      <p align="center" class="animated fadeIn delay-1s">Developed by Bart Tarasewicz</p>

      <p></p>
      <p align="center" class="animated fadeIn delay-1s">The best smart plantary incubator,<br> engineered with fine Polish programming.</p>

      <p></p>

      <div align="center" class="animated fadeIn delay-1s">
        ver 1.0.10
      </div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/javascript_bater.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script type="text/javascript" src="js/init.js"></script>
      <div class="sidenav-overlay"></div>
      <div class="drag-target"></div>
    </body>
  </html>

  <p></p>
<?php
}else{
?>
<p></p>
<?php
}
 ?>
