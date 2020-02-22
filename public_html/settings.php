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
      <link rel="shortcut icon" href="./images/earthbegin.ico" type="image/x-icon"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
      .sd-container {
        position: relative;
        float: right;
        margin-right: 30px;
      }

      .sd {
        border: 1px solid #1cbaa5;
        padding: 5px 10px;
        height: 30px;
        width: 150px;
      }

      .open-button {
        position: absolute;
        top: 10px;
        right: 3px;
        width: 25px;
        height: 25px;
        background: #fff;
        pointer-events: none;
      }

      .open-button button {
        border: none;
        background: transparent;
      }
      </style>
    </head>


    <body style onload="readIP()">
      <nav class="teal" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="incubator.php" class="brand-logo">🌎 Settings</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="incubator.php">Dashboard</a></li>
          </ul>
          <ul class="right hide-on-med-and-down">
            <li><a href="settings.php">Settings</a></li>
          </ul>

          <ul id="nav-mobile" class="sidenav" style="transform: translateX(-105%);">
            <li><a href="incubator.php">Dashboard</a></li>
            <li><a href="settings.php">Settings</a></li>
          </ul>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
      </nav>
      <p></p>
      <!--
      <div align="center" class="animated fadeIn delay-1s">This Device's Public IP:<p id="publicIPdisplay">IP NOT FOUND!</p></div>
      -->
      <div align="center" class="animated fadeIn delay-1s">

        <div class="row">
          <div align="center" style="margin:auto;max-width:420px;">
            <div class="card">
              <div class="card-content black-text">
              <span class="card-title">EarthBOX IP Address</span>
              </div>
              <div>
                <div align="center" class="animated fadeIn delay-1s"><a id="incubatorBoxIPdisplay" style="color:#1ddb4f;font-size:28px;">x.x.x.x</a></div>
              <br></br>
            </div>
          </div>
        </div>

        <div class="row">
          <div align="center" style="margin:auto;max-width:420px;">
            <div class="card">
              <div class="card-content black-text">
              <span class="card-title">Startup Settings</span>
              </div>
              <div>
                <a class="waves-effect waves-light btn" onclick="showStartupTips();">Show Startup Tips</a>&nbsp;<a class="waves-effect waves-light btn" onclick="dismissAlert();">Hide Startup Tips</a>
              <br></br>
            </div>
          </div>
        </div>
      </div>

        <p></p>

        <div class="row">
          <div align="center" style="margin:auto;max-width:420px;">
            <div class="card">
              <div class="card-content black-text">
              <span class="card-title">Calendar Settings</span>
              </div>
              <div>
                <img src="./images/blankios6calendar.png" align="center" width="30%" style="max-width:60px;margin-left:60px;"><a style="margin-left:-44px;color:#000;font-size:24px;" id="dayZDisplay"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#000;font-size:24px;">Days</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="sd-container">
                  <form method="POST" action="applynewdate.php">
                    <input width="80%" type="date" id="dateDataHidden" name="date" />
                </div>
                <p></p>
                <b>
                <a id="startdate" style="color:#000;float: left;margin-left:60px;">
                  <?php
                    $file = fopen("./python_scripts/logs/startDateIncubation.txt","r");
                    echo fgets($file);
                    fclose($file);
                  ?>
                </a>
                <a id="enddate" style="color:#000;float: right;margin-right:60px;">
                  <?php
                  $date = date('m/d/yy');
                  echo $date;
                  ?>
                </a>
                </b>
                <br></br>
                <a style="float: left;margin-left:40px;">Start Date of Incubating</a>
                <a style="float: right;margin-right:54px;">Today's Date</a>
                <p></p>
                <br></br>
              </div>
              <div class="card-action">
                  <button type="submit" class="waves-effect waves-light btn">Save New Date</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <p></p>



      <p align="center" class="animated fadeIn delay-1s">
        <div class="row">
            <div align="center" style="margin:auto;max-width:420px;">
              <div class="card">
                <div class="card-content black-text">
                <span class="card-title">Developed Professionally by:</span>
                </div>
                <div>
                  <h3>Bart Tarasewicz</h3>
                  <a href="mailto:barttaro@gmail.com">barttaro@gmail.com</a>
                <br></br>
              </div>
            </div>
          </div>
        </div>
      </p>

      <p></p>
      <p align="center" class="animated fadeIn delay-1s">The best smart device for your plants and greenery,<br> engineered with fine Polish programming.</p>

      <p></p>

      <div align="center" class="animated fadeIn delay-1s">
        ver 1.0.11
      </div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/javascript_bater.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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
