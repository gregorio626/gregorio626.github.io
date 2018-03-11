<!DOCTYPE html>
<html lang="en">
<head>
  <title>CFC Development</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">

  <!-- Font Awesome -->
  <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script> -->

  <!-- CSS -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>
<body>

  <?php


  ?>



  <header>
    <nav class="close" id="primary-nav">
      <!-- <a href="javascript:void(0);" id="menu-icon" onclick="openNavMenu()">&#9776;</a> -->
      <ul>
        <li><a id="primary-nav-menu" href="#">Menu</a></li>
        <li><a class="primary-nav-link" href="#">Home</a></li>
        <li><a class="primary-nav-link" href="#">About</a></li>
        <li><a class="primary-nav-link" href="#">Visitors</a></li>
        <li><a class="primary-nav-link" href="#">Events</a></li>
        <li><a class="primary-nav-link" href="#">Get Involved</a></li>
        <li><a class="primary-nav-link" href="#">Connect</a></li>
        <li><a class="primary-nav-link active" href="#">CB</a></li>
        <li><a class="primary-nav-link" href="#">Give</a></li>

      </ul>
    </nav>
  </header>

  <!-- <button onclick="getLocation()">Get location</button>
  <p id="coords"></p> -->

  <div class="cb-container">
    <form class="cb-form" id="cb-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
      <h1 class="cb-title">Check-in:</h1>
      <div class="cb-input-wrapper">
        <!-- <label class="cb-label" for="cb-fname">First Name</label> -->
        <input class="cb-input" id="cb-fname" type="text" name="firstname" placeholder="<?php empty($fNameErr) ? echo('First Name') : echo($fNameErr);?>">
      </div>
      <div class="cb-input-wrapper">
        <!-- <label class="cb-label" for="cb-lname">Last Name</label> -->
        <input class="cb-input" id="cb-lname" type="text" name="lastname" placeholder="Last Name">
      </div>
      <div class="cb-input-wrapper">
        <!-- <label class="cb-label" for="cb-email">Email</label> -->
        <input class="cb-input" id="cb-email" type="email" name="email" placeholder="Email">
      </div>
      <div class="cb-input-wrapper">
        <!-- <label class="cb-label" for="cb-phone">Phone</label> -->
        <input class="cb-input" id="cb-phone" type="tel" name="cb-phone" placeholder="Phone" onkeyup="formatPhoneInput()">
      </div>
      <div class="cb-input-wrapper">
        <select class="cb-input" id="cb-carrier" name="carrier">
          <option value="default">Carrier</option>
          <option value="att">AT&T</option>
          <option value="sprint">Sprint</option>
          <option value="tmobile">T-Mobile</option>
          <option value="verizon">Verizon</option>
          <option value="verizon">Other</option>
        </select>
      </div>
      <div class="cb-input-wrapper">
        <input class="cb-input" id="cb-postal" type="text" name="postal" placeholder="Postal">
      </div>
      <div class="cb-btn-wrapper">
        <input class="cb-btn-submit cb-input" id="cb-submit" type="submit" value="Submit" onclick="cbSubmitAlert()">
      </div>
    </form>
  </div>


  <!-- jQuery 3.3.1 -->
  <script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script> -->


  <!-- JS -->
  <script src="assets/js/main.js"></script>
</body>
</html>
