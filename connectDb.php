<?php

  // Connect to the database
  $dbhost = "localhost";
  $dbuser = "twv_travis";
  $dbpass = "twv_4rwZpa45";
  $dbname = "twv_runwme";

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  if (mysqli_connect_errno()) {
     echo "Failed to connect to MySQL: " / mysqli_connect_error();
     }
     
echo "Finished db connect";
?>
