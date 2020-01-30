
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
