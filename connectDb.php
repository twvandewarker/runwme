<?php

  // Connect to the database
  $dbhost = "localhost";
  $dbuser = "twv_travis";
  $dbpass = "twv_4rwZpa45";
  $dbname = "twv_runwme";
echo "Set connection variables";

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ("Error connecting to mysql");

echo "Connected db";
?>
