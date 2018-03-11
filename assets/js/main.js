/* This handles making the nav meu responsive(drop-down) when in mobile display*/
$("#primary-nav-menu").on("click", function() {
  if (!$( "#primary-nav" ).hasClass("close")) {
    $( "#primary-nav" ).addClass("close");
  } else {
    $( "#primary-nav" ).removeClass("close");
  }
});

/* @brief gets the user's current coordinates
*  @return void
*  Created: 03/06/18
*  TODO 03/07/18 Convert to jQuery as much as possible
*/
function getLocation() {
  var x = document.GetElementById("coords");

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

/* @brief puts the user's coordinates into the text element on the page
*  @return void
*  Created: 03/05/18
*  TODO 03/07/18 Convert to jQuery as much as possible
*/
function showPosition(position) {

  var x = document.GetElementById("coords");
  x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
}

/* @brief formats the phone number as the user types
*  @return void
*  Created: 03/06/18
*  TODO: 03/06/18 Still needs to check against backspace being pressed
*  TODO 03/07/18 Convert to jQuery as much as possible
*/
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


/* @brief Verify that all the inputs have acceptable values(and not null) before inserting data
*  @return void
*  Created: 03/07/18
*  TODO 03/07/18 If any errors, make the input border red
*  TODO 03/07/18 Convert to jQuery as much as possible
*/
function validateCBForm() {

  var errorMsg = ""; // The message displayed in the alert
  var errorFields = ""; // A list of all elements that did not pass validation

  /* Get the input values entered by the user */
  var fName = $("#cb-fname");
  var lName = $("#cb-lname");
  var email = $("#cb-email");
  var phone = $("#cb-phone");
  var carrier = $("#cb-carrier");
  var postal = $("#cb-postal");

  /* First name */
  if(!fName.val()) {
    fName.css('border-color', 'red');
    errorFields+= "First Name ";
  }
  /* Last Name */
  if(!lName.val()) {
    errorFields+= "Last Name ";
  }
  /* Email address */
  if(!email.val()) {
    errorFields+= "Email ";
  }
  /* Phone */
  if(!phone.val()) {
    errorFields+= "Phone ";
  }
  /* Carrier */
  if(carrier.val()=="default") {
    errorFields+= "Carrier ";
  }
  /* Postal */
  if(!postal.val()) {
    errorFields+= "Postal ";
  }

  if(errorFields!="") {
    alert("Oh no! The following field(s) weren't entered correctly:\n" + errorFields);
  }

}

/* @brief Function that is ran when the user clicks the submit button
*  @return void
*  Created: 03/06/18
*  TODO 03/07/18 Convert to jQuery as much as possible
*/
function cbSubmitAlert() {
  // var fName = document.getElementById("cb-fname").value;
  // var msg;
  // if(fName.length > 0) {
  //   msg = "Thank you, "+fName+". You have been successfully checked in!";
  // } else {
  //   msg = "Oops! It looks like you forgot to put your name in. Who am I checking in?";
  // }
  // alert(msg);

  validateCBForm();
}
