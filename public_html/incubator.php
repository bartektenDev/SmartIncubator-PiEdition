<?php

$outputFileData = "";

// // Define your username and password
$username = "admin";
$password = "earthbox";
//
//if ($_POST["txtUsername"] != $username || $_POST['txtPassword'] != $password)
if (false) {

?>

  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="./css/animate.css">
      <link href="https://fonts.googleapis.com/css?family=Squada+One&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"/>
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
      <link rel="icon" href="https://docs.google.com/uc?export=download&id=1XNGPjIfDBdAtnlecVzkS50dP5JgiN4Nz">
<!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>



    <font size="4">
    <h1 style="margin-left:60px;">Login</h1>

    <p></p>

    <a style="margin-left:60px;">EarthBOX - The smart plant incubator.</a>

    <p></p>

    <form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="margin:60px;">

        <p><label for="txtUsername">Username:</label>

        <br /><input type="text" title="Enter your Username" name="txtUsername" /></p>

        <p><label for="txtpassword">Password:</label>

        <br /><input type="password" title="Enter your password" name="txtPassword" /></p>

        <p><button class="btn-large" type="submit" name="Submit" value="Login">Login
            <i class="material-icons">navigate_next</i>
          </button></p>

    </form>
    </font>

    <a style="margin-left:60px;">ver 1.0.15</a>

    <p>

<p></p>

  <?php
}else{
?>

<p></p>


    <!doctype html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <link href="css/style.css" rel="stylesheet" type="text/css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="./css/animate.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"/>
      <link rel="shortcut icon" href="./images/earthbegin.ico" type="image/x-icon"/>
<!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title></title>

      <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    </head>
    <body onload="openWebcamLiveStream();" style>
      <nav class="teal" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="incubator.php" class="brand-logo">🌎 EarthBOX</a>
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

      <div class="row">
        <div align="center" style="margin:auto;max-width:420px;">


      <?php
        $file = fopen("./python_scripts/logs/dismissPurchaseAlertStatus.txt","r");

        $outputFileData = fgets($file);
        fclose($file);
        if($outputFileData == "youreExcusedKat"){

      ?>

      <?php
        }else{
      ?>
      <div class="card">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <span class="card-title">Thank you for your purchase!</span>
            <p>Dear customer, I appreciate your support and your dollars. It will help me
            pay for college. I hope you use this tool to your advantage and make yourself some
          of mothernatures most beautiful creations. Enjoy some of lifes best things to offer. -Bart</p>
          </div>
          <div class="card-action">
            <a href="https://www.paypal.me/polbusniess">Help Bart</a>
            <a onclick="dismissPurchaseAlert();">Close</a>
          </div>
        </div>
      </div>

      <?php
        }
      ?>

      <?php
        $file = fopen("./python_scripts/logs/dismissAlertStatus.txt","r");

        $outputFileData = fgets($file);
        fclose($file);
        if($outputFileData == "youreExcusedKat"){

      ?>

      <?php
        }else{
      ?>

      <div class="card">
        <a onclick="dismissAlert();" style="margin-left:310px;margin-top:12px;"class="waves-effect waves-red btn-flat">Close</a>
        <p></p>
        <div class="slider">
           <ul class="slides">
             <li>
               <img src="./images/cannabissprouting.jpg"> <!-- random image -->
               <div class="caption center-align">
                 <h3>EarthBOX Pro</h3>
                 <h5 class="light white-text text-lighten-3"><b>Welcome newbie!</b></h5>
               </div>
             </li>
             <li>
               <img src="./images/hidefweed.jpg"> <!-- random image -->
               <div class="caption left-align">
                 <h3>Grow like a Pro</h3>
                 <h5 class="light white-text text-lighten-3"><b>Schedule when to water or why! Never miss a day of feeding.</b></h5>
               </div>
             </li>
             <li>
               <img src="./images/growtentweed.jpg"> <!-- random image -->
               <div class="caption left-align">
                 <h3>No stress.</h3>
                 <h5 class="light white-text text-lighten-3"><b>Your crop can be taken care of easily and remotely.</b></h5>
               </div>
             </li>
             <li>
               <img src="./images/cannabistintwallpaper.jpg"> <!-- random image -->
               <div class="caption center-align">
                 <h3>Results!</h3>
                 <h5 class="light white-text text-lighten-3"><b>Harvesting is the prize!</b></h5>
               </div>
             </li>
           </ul>
         </div>
        <p></p>
        <div class="card-action">
          <a href="settings.php">Setup My EarthBOX</a>
        </div>
      </div>


      <?php
        }
      ?>

          <div class="card">
            <div class="card-content black-text">
            <span class="card-title">Automated Week Schedule</span>
            </div>
            <div>
              <table width="100%">
                <tr>
                  <th>S</th>
                  <th>M</th>
                  <th>T</th>
                  <th>W</th>
                  <th>T</th>
                  <th>F</th>
                  <th>S</th>
                </tr>
                <tr>
                  <td>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/sundayTodo.txt","r");
                      $fileData = fgets($file);
                      fclose($file);

                      if(strpos($fileData, 'water') !== false){
                        echo '<img src="./images/fedwatericon.png" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }else{
                        echo '<img src="./images/reddot.gif" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }
                    ?>
                  </td>
                  <td>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/mondayTodo.txt","r");
                      $fileData = fgets($file);
                      fclose($file);

                      if(strpos($fileData, 'water') !== false){
                        echo '<img src="./images/fedwatericon.png" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }elseif (strpos($fileData, 'fan') !== false) {
                        echo '<img src="./images/faniconclean.png" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }else{
                        echo '<img src="./images/reddot.gif" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }
                    ?>
                  </td>
                  <td>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/tuesdayTodo.txt","r");
                      $fileData = fgets($file);
                      fclose($file);

                      if(strpos($fileData, 'water') !== false){
                        echo '<img src="./images/fedwatericon.png" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }elseif (strpos($fileData, 'fan') !== false) {
                        echo '<img src="./images/faniconclean.png" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }else{
                        echo '<img src="./images/reddot.gif" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }
                    ?>
                  </td>
                  <td>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/wednesdayTodo.txt","r");
                      $fileData = fgets($file);
                      fclose($file);

                      if(strpos($fileData, 'water') !== false){
                        echo '<img src="./images/fedwatericon.png" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }elseif (strpos($fileData, 'fan') !== false) {
                        echo '<img src="./images/faniconclean.png" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }else{
                        echo '<img src="./images/reddot.gif" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }
                    ?>
                  </td>
                  <td>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/thursdayTodo.txt","r");
                      $fileData = fgets($file);
                      fclose($file);

                      if(strpos($fileData, 'water') !== false){
                        echo '<img src="./images/fedwatericon.png" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }elseif (strpos($fileData, 'fan') !== false) {
                        echo '<img src="./images/faniconclean.png" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }else{
                        echo '<img src="./images/reddot.gif" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }
                    ?>
                  </td>
                  <td>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/fridayTodo.txt","r");
                      $fileData = fgets($file);
                      fclose($file);

                      if(strpos($fileData, 'water') !== false){
                        echo '<img src="./images/fedwatericon.png" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }elseif (strpos($fileData, 'fan') !== false) {
                        echo '<img src="./images/faniconclean.png" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }else{
                        echo '<img src="./images/reddot.gif" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }
                    ?>
                  </td>
                  <td>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/saturdayTodo.txt","r");
                      $fileData = fgets($file);
                      fclose($file);

                      if(strpos($fileData, 'water') !== false){
                        echo '<img src="./images/fedwatericon.png" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }elseif (strpos($fileData, 'fan') !== false) {
                        echo '<img src="./images/faniconclean.png" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }else{
                        echo '<img src="./images/reddot.gif" align="center" width="42px" style="max-width:42px;"><a style="color:#000;font-size:24px;" id=""/></a>';
                      }
                    ?>
                  </td>
                </tr>
              </table>
            <div class="card-action">
              <a href="settings.php">Go to settings</a>
            </div>
          </div>
        </div>

      <p></p>

          <div class="card">
            <div class="card-content black-text">
            <span class="card-title">You have been incubating for...</span>
            </div>
            <div>
              <img src="./images/blankios6calendar.png" align="center" width="30%" style="max-width:60px;"><a style="margin-left:-44px;color:#000;font-size:24px;" id="dayZDisplay"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#000;font-size:24px;">Days</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <b>
              <a id="startdate" style="text-align:left;color:#000;">
                <?php
                  $file = fopen("./python_scripts/logs/startDateIncubation.txt","r");
                  echo fgets($file);
                  fclose($file);
                ?>
              </a>
              <a id="enddate" style="text-align:left;color:#000;">
                <?php
                $date = date('m/d/yy');
                echo $date;
                ?>
              </a>
              </b>
              <p></p>

              <font size="3" color="#000">
              <a style="margin-left:140px;">Start Date</a>
              <a style="margin-left:20px;">Today's Date</a>
              </font><p></p>
              </div>
            <p></p>
            <div class="card-action">
              <a href="settings.php">Go to settings</a>
            </div>
          </div>

      <p></p>

          <div class="card">
            <div class="card-image">
              <img id="webcamLiveStreamDisplay" alt="Live Stream will display here." align="center" style="-webkit-user-select: none;" src="./images/livestreamnotfound.jpg" width="95%"/>
              <span class="card-title"><img align="left" src="./images/reddot.gif" width="12px" style="max-width:12px;margin-top:13px;"/><font color="#fff">LiveStream</font></span>
            </div>
            <div class="card-action">
              <a href="fullscreenStream.html">Fullscreen</a>
            </div>
          </div>

      <p></p>

          <div class="card white">
            <div class="card-content black-text">
              <span class="card-title">EarthBOX Details</span>
              <p></p>
              <div align="center"><font size="4" color="#000">
                <img src="./images/360plant.gif" align="center" height="35%" style="max-height:220px;"/>

                <p></p>
                <img src="./images/tempicon2.png" align="center" width="30%" style="max-width:50px">
                <a id="tempDisplay" style="font-size: 26px;font-family: 'Squada One', cursive;color:#000;">
                  <?php
                    $file = fopen("./python_scripts/logs/currentTemp.txt","r");
                    echo fgets($file);
                    fclose($file);
                  ?>
                </a><a id="degree" style="font-size: 26px;font-family: 'Squada One', cursive;color:#000;">°</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="./images/humidityredblackoutline.png" align="center" width="30%" style="max-width:70px"/>
                <a id="humidityDisplay" style="font-size: 26px;font-family: 'Squada One', cursive;color:#000;">
                  <?php
                    $file = fopen("./python_scripts/logs/currentHumidity.txt","r");
                    echo fgets($file);
                    fclose($file);
                  ?>
                </a><a id="percent" style="font-size: 26px;font-family: 'Squada One', cursive;color:#000;">%</a>
                <!-- <img src="./images/ph-icon-6.png" align="center" width="25%" style="max-width:60px">
                <a id="phLevelDisplay">
                    <?php
                      $file = fopen("./python_scripts/logs/currentPh.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                </a><a id="pHdlol">pH</a> -->
                  <p></p>
                  <a style="margin:auto;margin-right:25px;">Air Temperature</a><a style="margin:auto;margin-left:25px;">Humidity Level</a>
                  <p></p>

                  <img src="./images/soiltemp.png" align="center" width="30%" style="font-size: 26px;font-family: 'Squada One', cursive;max-width:74px;"/>
                  <a id="soilTempDisplay" style="font-size: 26px;font-family: 'Squada One', cursive;color:#000;">
                    <?php
                      $file = fopen("./python_scripts/logs/currentSoilTemp.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </a><a id="degree" style="font-size: 26px;font-family: 'Squada One', cursive;color:#000;">°</a>&nbsp;&nbsp;
                  <img src="./images/drymeter3.png" id="moistMeterIMG" align="center" width="30%" style="font-family: 'Squada One', cursive;max-width:100px;"/>
                  <a id="soilMoistureDisplay" style="font-size: 26px;font-family: 'Squada One', cursive;color:#000;">
                    <?php
                      $file = fopen("./python_scripts/logs/currentSoilMoisture.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>/1K
                </a>
                  <p></p>
                  <a style="margin:auto;margin-right:30px;">Soil Temperature</a><a style="margin:auto;margin-left:30px;">Moisture Level</a>
              </font>

            <p></p>
<!--
            <font size="3" color="#000">
            <img src="./images/minilightbulb.png" align="center" width="30%" style="max-width:60px;"/>
            <span>
              <?php
                $file = fopen("./python_scripts/logs/miniLightStatus.txt","r");
                echo fgets($file);
                fclose($file);
              ?>
            </span>
            <img src="./images/fanoff.png" align="center" width="30%" style="max-width:50px;"/>
            <span id="fanStatusText">
              <?php
                $file = fopen("./python_scripts/logs/fanStatus.txt","r");
                echo fgets($file);
                fclose($file);
              ?>
            </span>
-->

            <!-- <img src="./images/growlighton.png" align="center" width="30%" style="max-width:60px;"/>
            <span>
              <a style="color:#000;">
                Off
              </a>
              /
              <a style="color:#000;">
                On
              </a>
            </span> -->
            </font>
            </div>
            </div>

            <div align="center" class="card-action">
              <!--<a class="btn-floating btn-large waves-effect waves-light white"><img src="./images/minilighticon5.png" width="100%" /><i class="material-icons">minilight</i></a>&nbsp;
              <a class="btn-floating btn-large waves-effect waves-light white" onclick="activateFan();"><img src="./images/fanicon4.png" width="100%" /></a>&nbsp;
              <a class="btn-floating btn-large waves-effect waves-light white"><img src="./images/growlighton.png" width="100%" style="vertical-align: middle;position: absolute;top: 0;bottom: 0;margin: auto;"  /><i class="material-icons">growlight</i></a>&nbsp;-->
              <a class="btn-floating btn-large waves-effect waves-light white" onclick="activateWaterPumpServo();"><img src="./images/waterplanticon6.png" width="100%" /><i class="material-icons">waterplant</i></a>&nbsp;
              <a class="btn-floating btn-large waves-effect waves-light black" onclick="askReboot();"><img src="./images/reloadicon.png" width="100%"/><i class="material-icons">reload</i></a>
            </div>
          </div>
          ver 1.0.15
        </div>
      </div>

      <!-- <p></p>
      <div align="center" id="statHolder" class="">?</div>
      <p></p>

      <div align="center" class="animated fadeIn delay-1s">
        <form method="post" action="javascript:callMiniLightOn()">
          <button type="submit" onclick="" style="width: 304px;height: 54px" value="miniLightON">Mini Light ON <img src="images/minilighticon.png" width="18px"></button>
        </form>
      </div>

      <p></p>

      <div align="center" class="animated fadeIn delay-1s">
        <form method="post" action="javascript:callMiniLightOff()">
          <button type="submit" onclick="" style="width: 304px;height: 54px" value="miniLightOFF">Mini Light OFF <img src="images/minilighticon.png" width="18px"></button>
        </form>
      </div> -->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script type="text/javascript" src="js/javascript_bater.js"></script>
    <script type="text/javascript" src="js/slidercode.js"></script>

    <script src="./js/materialize.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
      <script type="text/javascript" src="js/init.js"></script>
      <div class="sidenav-overlay"></div>
      <div class="drag-target"></div>
    </body>
  </html>

</p>

<?php

}

?>
