<?php

// // Define your username and password
// $username = "bart";
// $password = "password";
//
//
// if ($_POST["txtUsername"] != $username || $_POST['txtPassword'] != $password) {
if(isset($_GET['light']) == false){
  header("Location: index.php");
}
?>

  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="./css/animate.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"/>
<!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <!--

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

        <p><input type="submit" name="Submit" class="bigbutton" value="Login" /></p>

    </form>
    </font>

    <p> -->

    <?php
    $which_light = $_GET['light'];
    //echo 'which door? ' .  $which_door;

    if (isset($_POST['miniLightON']))
    {
    exec("sudo python /home/pi/incubator/python_scripts/mini_light_on.py");
    }
    if (isset($_POST['miniLightOFF']))
    {
    exec("sudo python /home/pi/incubator/python_scripts/mini_light_off.py");
    }

    unset($_POST);
    //echo "<hr />";
    //echo "<strong>Right = ".isset($_POST['RightOPEN'])."</strong><br /><strong>Left = ".isset($_POST['LeftOPEN'])."</strong>";
    ?>

    <!doctype html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <link href="css/style.css" rel="stylesheet" type="text/css">
      <title></title>

      <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    </head>
    <body onload="openWebcamLiveStream();" style>
      <nav class="green lighten-1" role="navigation">
        <div class="nav-wrapper container"><a size="3">ver. 1.0.6&nbsp;</a><a id="logo-container" href="incubator.php" class="brand-logo">🌎 EarthBOX</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="incubator.php">Incubator</a></li>
          </ul>
          <ul class="right hide-on-med-and-down">
            <li><a href="settings.html">Settings</a></li>
          </ul>

          <ul id="nav-mobile" class="sidenav" style="transform: translateX(-105%);">
            <li><a href="incubator.php">Incubator</a></li>
            <li><a href="settings.html">Settings</a></li>
          </ul>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
      </nav>

      <p></p>

      <div align="center">
        <font size="3" color="#000" style="margin-left:-200px;">
        Been Incubating for
        </font>
      </div>

      <p></p>

      <div align="center" class="animated fadeIn delay-1s">
        <div>
          <img src="./images/blankios6calendar.png" align="center" width="30%" style="max-width:60px;"><a style="margin-left:-44px;color:#000;font-size:24px;" id="dayZDisplay"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#000;font-size:24px;">Days</a>&nbsp;
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

          <p></p>

          <font size="3" color="#000">
          <a style="margin-left:140px;">Start Date</a>
          <a style="margin-left:20px;">Today's Date</a>
          </font><p></p>
          <font size="5" color="#000">
          <img src="./images/minilightbulb.png" align="center" width="30%" style="max-width:60px;margin-left:20px;"><a>OFF</a>
          <img src="./images/fanon.gif" align="center" width="30%" style="max-width:60px;"><a id="waterLevelDisplay">ON</a>
          <img src="./images/growlighton.png" align="center" width="30%" style="max-width:80px;"><a style="margin-left:5px;" id="lightDisplay">ON</a>
        </font></div>
      </div>

      <div class="row">
        <div class="col s12 m7" style="max-width:420px;">
          <div class="card">
            <div class="card-image">
              <img id="webcamLiveStreamDisplay" align="center" style="-webkit-user-select: none;" src="" width="95%">
              <span class="card-title">🔴 LiveStream</span>
            </div>
            <div class="card-action">
              <a href="#">Fullscreen</a>
            </div>
          </div>
        </div>
      </div>

      <p></p>

      <div class="row">
        <div class="col s12 m6" style="max-width:420px;">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Incubator Controls</span>
              <div align="center"><font size="4" color="#000">
                <img src="./images/weedplantincubator.png" align="center" height="25%" style="max-height:200px;">
                <img src="./images/tempicon2.png" align="center" width="15%" style="max-width:44px">
                <a id="tempDisplay" style="color:#000;">
                  <?php
                    $file = fopen("./python_scripts/logs/currentTemp.txt","r");
                    echo fgets($file);
                    fclose($file);
                  ?>
                </a><a id="degree" style="color:#000;">°</a>
                <img src="./images/humidityred.png" align="center" width="30%" style="max-width:60px">
                <a id="humidityDisplay" style="color:#000;">
                  <?php
                    $file = fopen("./python_scripts/logs/currentHumidity.txt","r");
                    echo fgets($file);
                    fclose($file);
                  ?>
                </a><a id="percent" style="color:#000;">%</a>
                <!-- <img src="./images/ph-icon-6.png" align="center" width="25%" style="max-width:60px">
                <a id="phLevelDisplay">
                  <?php
                    $file = fopen("./python_scripts/logs/currentPh.txt","r");
                    echo fgets($file);
                    fclose($file);
                  ?>
              </a><a id="pHdlol">pH</a> -->

              <img src="./images/soiltemp.png" align="center" width="30%" style="max-width:70px;">
              <a id="soilTempDisplay" style="color:#000;">
                <?php
                  $file = fopen("./python_scripts/logs/currentSoilTemp.txt","r");
                  echo fgets($file);
                  fclose($file);
                ?>
              </a><a id="percent" style="color:#000;">%</a>
              <img src="./images/soilmeter.png" id="moistMeterIMG" align="center" width="50%" style="max-width:110px;">
              <a id="soilMoistureDisplay" style="color:#000;">
                <?php
                  $file = fopen("./python_scripts/logs/currentSoilMoisture.txt","r");
                  echo fgets($file);
                  fclose($file);
                ?>/1000
            </a>
              </font>
            </div>
            </div>
            <div align="center" class="card-action">
              <a class="btn-floating btn-large waves-effect waves-light white"><img src="./images/minilighticon5.png" width="100%" /><i class="material-icons">minilight</i></a>&nbsp;
              <a class="btn-floating btn-large waves-effect waves-light white"><img src="./images/waterplanticon6.png" width="100%" /><i class="material-icons">waterplant</i></a>&nbsp;
              <a class="btn-floating btn-large waves-effect waves-light white"><img src="./images/fanicon4.png" width="100%" /></a>&nbsp;
              <a class="btn-floating btn-large waves-effect waves-light black"><img src="./images/reloadicon.png" width="100%"/><i class="material-icons">reload</i></a>
            </div>
          </div>
        </div>
      </div>

      <div align="center" class="animated fadeIn delay-1s">

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

      <p></p>
      <p align="center" class="animated fadeIn delay-1s">Developed by Bart Tarasewicz</p>

      <p></p>
      <p align="center" class="animated fadeIn delay-1s">The best smart plantary incubator,<br> engineered with fine Polish programming.</p>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <script type="text/javascript">

      var theMiniLight = "<?= $which_light; ?>";
      $('#statHolder').attr('class', '');
      switch(theMiniLight)
      {
        case 'on' :
            $('#statHolder').addClass('miniLightON')
        break;

        case 'off' :
            $('#statHolder').addClass('miniLightOFF')
        break;
      }

      function callMiniLightOn()
      {
        $.ajax({
            url: 'mini_light_on.php',
            success: loadDataSuccess,
            error : loadError
        });
      }

      function callMiniLightOff()
      {
        $.ajax({
          url: 'mini_light_off.php',
          success: loadDataSuccess,
          error : loadError
        });
      }

      function loadError(jqXHR, textStatus, errorThrown)
      {
        loadDataError(errorThrown);
      }

      function loadDataError(error)
      {
        console.log('Load Error : ' + error);
      }

      function loadDataSuccess(data)
      {
        location.href = '?light='+data;
      }
      </script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <script type="text/javascript" src="js/javascript_bater.js"></script>

    <script src="./js/materialize.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
      <script type="text/javascript" src="js/init.js"></script>
      <script type="text/javascript" src="js/datepickerc.js"></script>
      <div class="sidenav-overlay"></div>
      <div class="drag-target"></div>
    </body>
  </html>

</p>
