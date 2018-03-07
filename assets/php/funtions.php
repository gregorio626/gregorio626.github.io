<?php
/* @brief A function for connecting to the database through PHP
*  @return returns the object created for the db connection
*  @param $server The server name
*  @param @username The username for logging in when establishing a server connection
*  @param @password The password for logging in when establishing a server connection
*/
function createConn($server, $username, $password) {
    $db_server = $server
    $db_user = $username
    $db_pass = $password

    $conn = new mysqli($db_server, $db_user, $db_pass);

    // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  }

  return $conn
}

function closeConn() {
  //code for closing the db connection
}


?>
