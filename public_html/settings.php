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
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
      <link rel="icon" href="https://docs.google.com/uc?export=download&id=1XNGPjIfDBdAtnlecVzkS50dP5JgiN4Nz">
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
              <span class="card-title">EarthBOX System Details</span>
              </div>
              <div>
                <div align="center" class="animated fadeIn delay-1s">
                  <img src="./images/globe.png" width="50px" style="margin-bottom:-15px;" /><a id="incubatorBoxIPdisplay" style="color:#1ddb4f;font-size:28px;">x.x.x.x</a>
                  <p></p>
                  <img src="./images/sshtunnel.png" width="50px" style="margin-bottom:-15px;" /><a id="incubatorBoxSshIPdisplay" style="color:#000;font-size:24px;">
                    SSH Not Enabled
                  </a>
                  <p></p>
                  <span class="card-title">Network info</span>
                  <p></p>
                  <a width="80%" id="networkoutput" value="">
                    <?php
                      $file = fopen("./python_scripts/logs/sshHostname.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </a>
                </div>
              <br></br>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div align="center" style="margin:auto;max-width:420px;">
          <div class="card">
            <div class="card-content black-text">
            <span class="card-title">Automated Week Schedule</span>
            <table>
              <thead>
                <tr>
                    <th>Day</th>
                    <th>Run</th>
                    <th>Time</th>
                    <col align="left">
                    <col align="left">
                    <col align="right">
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>Sunday</td>
                  <td class='dropdown-trigger' href='#' data-target='dropdown2'>💧</td>
                  <td class='dropdown-trigger' href='#' data-target='dropdown1'>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/sunday.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Monday</td>
                  <td class='dropdown-trigger' href='#' data-target='dropdown2'>💧</td>
                  <td>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/monday.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Tues.</td>
                  <td class='dropdown-trigger' href='#' data-target='dropdown2'>💧</td>
                  <td>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/tuesday.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Wed.</td>
                  <td class='dropdown-trigger' href='#' data-target='dropdown2'>💧</td>
                  <td>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/wednesday.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Thurs.</td>
                  <td class='dropdown-trigger' href='#' data-target='dropdown2'>💧</td>
                  <td>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/thursday.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Friday</td>
                  <td class='dropdown-trigger' href='#' data-target='dropdown2'>💧</td>
                  <td>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/friday.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Saturday</td>
                  <td class='dropdown-trigger' href='#' data-target='dropdown2'>💧</td>
                  <td>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/saturday.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                </tr>
                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>
                  <li><a href="#!">Turn OFF</a></li>
                  <li><a href="#!">12:00 am</a></li>
                  <li><a href="#!">1:00 am</a></li>
                  <li><a href="#!">2:00 am</a></li>
                  <li><a href="#!">3:00 am</a></li>
                  <li><a href="#!">4:00 am</a></li>
                  <li><a href="#!">5:00 am</a></li>
                  <li><a href="#!">6:00 am</a></li>
                  <li><a href="#!">7:00 am</a></li>
                  <li><a href="#!">8:00 am</a></li>
                  <li><a href="#!">9:00 am</a></li>
                  <li><a href="#!">10:00 am</a></li>
                  <li><a href="#!">11:00 am</a></li>
                  <li><a href="#!">12:00 pm</a></li>
                  <li><a href="#!">1:00 pm</a></li>
                  <li><a href="#!">2:00 pm</a></li>
                  <li><a href="#!">3:00 pm</a></li>
                  <li><a href="#!">4:00 pm</a></li>
                  <li><a href="#!">5:00 pm</a></li>
                  <li><a href="#!">6:00 pm</a></li>
                  <li><a href="#!">7:00 pm</a></li>
                  <li><a href="#!">8:00 pm</a></li>
                  <li><a href="#!">9:00 pm</a></li>
                  <li><a href="#!">10:00 pm</a></li>
                  <li><a href="#!">11:00 pm</a></li>
                  <li><a href="#!">12:00 pm</a></li>
                </ul>
                <ul id='dropdown2' class='dropdown-content'>
                  <li><a href="#!">Turn OFF</a></li>
                  <li><a href="#!">💨</a></li>
                  <li><a href="#!">💧</a></li>
                  <li><a href="#!">💡</a></li>
                  <li><a href="#!">💨💧</a></li>
                  <li><a href="#!">💨💡</a></li>
                  <li><a href="#!">💡💧</a></li>
                </ul>
              </tbody>
            </table>
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

        <div class="row">
            <div align="center" style="margin:auto;max-width:420px;">
              <div class="card">
                <div class="card-content black-text">
                <span class="card-title">Developed Professionally by:</span>
                  <h3>Bart Tarasewicz</h3>
                  <a href="mailto:barttaro@gmail.com">barttaro@gmail.com</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      <p></p>
      <p align="center" class="animated fadeIn delay-1s">The best smart device for your plants and greenery,<br> engineered with fine Polish programming.</p>

      <p></p>

      <div align="center" class="animated fadeIn delay-1s">
        ver 1.0.12
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
