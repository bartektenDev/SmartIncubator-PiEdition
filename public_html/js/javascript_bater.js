
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
  //launch webcam stream defult is http://IPCAMADDRESSHERE:8082
  document.getElementById("webcamLiveStreamDisplay").src = "http://" + window.location.hostname + ":8082"

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
