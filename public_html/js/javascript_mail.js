
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
  document.getElementById("mailBoxIPdisplay").innerHTML = window.location.hostname + ":" + window.location.port;
  waitF();
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
