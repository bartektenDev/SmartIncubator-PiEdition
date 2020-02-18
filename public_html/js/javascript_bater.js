
function waitF()
{
  var passAFTERthree = 0;
  var check = function(){
      if(passAFTERthree == 3){
          getPublicIP();
      }
      else {
          setTimeout(check, 1000); // check again in a second
          passAFTERthree++;
      }
  }
  check();
}

function readIP()
{
  document.getElementById("incubatorBoxIPdisplay").innerHTML = window.location.hostname + ":" + window.location.port;
  waitF();
}

function openWebcamLiveStream()
{
  if(window.location.hostname != "127.0.0.1"){
    document.getElementById("webcamLiveStreamDisplay").src = "http://" + window.location.hostname + ":8082"
  }

  //readMoistMeter
  readMoistMeter();

  //display livestream and if not found notify user!
  checkSRC();

  countIncubationDays();

}

function getPublicIP()
{
  const Http = new XMLHttpRequest();
  const url='https://bot.whatismyipaddress.com/';
  Http.open("GET", url);
  Http.send();

  Http.onreadystatechange = (e) => {
    console.log(Http.responseText)
    document.getElementById("publicIPdisplay").innerHTML = Http.responseText;
    waitAndCheckPubIP();
  }
}

function waitAndCheckPubIP()
{
  var passAFTERone = 0;
  var check = function(){
      if(passAFTERone == 1){
          clearDeadIP();
      }
      else {
          setTimeout(check, 1000); // check again in a second
          passAFTERone++;
      }
  }
  check();
}

function clearDeadIP()
{
  if(document.getElementById("publicIPdisplay").innerHTML == ""){
    document.getElementById("publicIPdisplay").innerHTML = "Could not read IP from this device due to security policy.";
  }
}

function readMoistMeter()
{
  var moistity = document.getElementById('soilMoistureDisplay').innerHTML;

  var img = document.getElementById('moistMeterIMG');

  var s = moistity;
  s = s.substring(0, s.indexOf('/'));
  var drywetmeter = 0;
  drywetmeter = parseInt(s);

  var deg = 0;//The rotation angle, in degrees

  if(drywetmeter != 0){
    if(drywetmeter >= 1 && drywetmeter <= 150){
      img.src = "./images/drymeter1.png";
    }
    if(drywetmeter >= 151 && drywetmeter <= 300){
      img.src = "./images/drymeter2.png";
    }
    if(drywetmeter >= 300 && drywetmeter <= 550){
      img.src = "./images/drymeter3.png";
    }
    if(drywetmeter >= 551 && drywetmeter <= 799){
      img.src = "./images/drymeter4.png";
    }
    if(drywetmeter >= 800){
      img.src = "./images/drymeter5.png";
    }
  }
}

function checkSRC()
{
  var elem = document.getElementById('webcamLiveStreamDisplay');

  if(elem.getAttribute('src') == "http://127.0.0.1:8082" || elem.getAttribute('src') == "http://localhost:8082")
  {
    elem.src = "./images/livestreamnotfound.jpg";
  }

}

function countIncubationDays()
{
  var incubationDisplay = document.getElementById('dayZDisplay');

  var date1 = new Date(document.getElementById('startdate').innerHTML);
  var date2 = new Date(document.getElementById('enddate').innerHTML);

  if(incubationDisplay.innerHTML == ""){
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    today = mm + '/' + dd + '/' + yyyy;

    date2.value = today;

    var Difference_In_Time = date2.getTime() - date1.getTime();
    var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);

    incubationDisplay.innerHTML = Difference_In_Days;
  }
}

function dismissAlert()
{
  var data = new FormData();
  data.append("data" , "");
  var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
  xhr.open( 'post', 'hidealertwrite.php', true );
  xhr.send(data);

  currentURL = window.location.pathname;

  if(currentURL == "/incubator.php" || currentURL == "/s_incubate/public_html/incubator.php"){
    location.reload();
  }
}

function showStartupTips()  {
  var data = new FormData();
  data.append("data" , "");
  var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
  xhr.open( 'post', 'showalertwrite.php', true );
  xhr.send(data);
}

function activateFan() {
  // var fanStat = document.getElementById("fanStatusText").innerHTML;
  // if(fanStat == "off") {
  //    $.ajax({
  //        url: './fanOn.php',
  //        success: loadDataSuccess,
  //        error : loadError
  //    });
  // } else if (fanStat == "on") {
  //   $.ajax({
  //       url: './fanOff.php',
  //       success: loadDataSuccess,
  //       error : loadError
  //   });
  // }
  $.ajax({
      url: './fanOn.php',
      success: loadDataSuccess,
      error : loadError
  });
}

function activateWaterPumpServo() {
  var retVal = confirm("Activating the water pump will run for only 3 seconds. Are you sure you want activate the water pump?");
  if( retVal == true ) {
     //continue
     M.toast({html: 'Water pump activated!'})
     var x = new XMLHttpRequest();
         x.open("GET","waterpump.php",true);
         x.send();
         return false;
  } else {
     //user clicked cancel
     M.toast({html: 'Cancelled Water Pump Activation...'})
     return false;
  }
}

function startRebootTimer() {
  M.toast({html: 'EarthBOX initiated reboot...'})
  var myVar = setInterval(attemptReconnection, 105000);
}

function attemptReconnectBtn() {
  earthBoxPreviousIP = window.location.hostname + ":" + window.location.port;
  document.location.href = "http://" + earthBoxPreviousIP + "/index.php";
}

function attemptReconnection() {
  M.toast({html: 'EarthBOX successfully rebooted.'})
  earthBoxPreviousIP = window.location.hostname + ":" + window.location.port;
  document.location.href = "http://" + earthBoxPreviousIP + "/index.php";
}
