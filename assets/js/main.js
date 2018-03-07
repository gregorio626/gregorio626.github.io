

function getLocation() {
  var x = document.GetElementById("corods");

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {

  var x = document.GetElementById("corods");
  x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
}

/*TODO: Still needs to check against backspace being pressed */
function formatPhoneInput() {
  var phone=document.getElementById("cb-phone"); //Get the value in the box.
  var len=phone.value.length;

  if(len==1) { // Add the country code (USA) and open parenthesis for area code
    phone.value = '+1(' + phone.value;
  } else if(len==6) { // Close the parenthesis on the area code
    phone.value += ') ';
  } else if(len==11) { // Add the dash
    phone.value += '-';
  }
}


function cbSubmitAlert() {
  var fname = document.getElementById("cb-fname").value;
  var msg;
  if(fname.length > 0) {
    msg = "Thank you, "+fname+". You have been successfully checked in!";
  } else {
    msg = "Oops! It looks like you forgot to put your name in. Who am I checking in?";
  }
  alert(msg);
}
