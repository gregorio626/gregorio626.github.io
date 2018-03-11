<?php

//Define the variables and set them to empty values.
$fNameErr = $lNameErr = $emailErr = $phoneErr = $carrierErr = $postalErr = "";
$fName = $lName = $email = $phone = $carrier = $postal = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // First name
  if(empty($_POST['firstname'])) {
    $fNameErr = "First name is required.";
  } else {
    $fName = secure_input($_POST["firstname"]);
  }

  // Last name
  if(empty($_POST['lastname'])) {
    $lNameErr = "Last name is required.";
  } else {
    $lName = secure_input($_POST["lastname"]);
  }

  // Email
  if(empty($_POST['email'])) {
    $emailErr = "Email is required.";
  } else {
    $email = secure_input($_POST["email"]);
  }

  // Phone
  if(empty($_POST['phone'])) {
    $phoneErr = "Phone number is required.";
  } else {
    $phone = secure_input($_POST["phone"]);
  }

  // Carrier
  if(empty($_POST['carrier'])) {
    $carrierErr = "Carrier name is required.";
  } else {
    $carrier = secure_input($_POST["carrier"]);
  }

  // Postal
  if(empty($_POST['postal'])) {
    $postalErr = "Postal code is required.";
  } else {
    $postal = secure_input($_POST["postal"]);
  }

}


/* @brief makes sure the data enetred by the user is secure, to prevent hack attempts
*  @param $data The data that needs to be made secure
*  @return Returns the secure data
*  Created: 03/11/18
*/
function secure_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
