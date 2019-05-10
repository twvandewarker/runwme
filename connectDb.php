<?php

  // Connect to the database for the entry of the CSV stuff into the database.
  $dbhost = "localhost";
  $dbuser = "twv_travis";     // CHANGE IT TO YOUR DATABASE USER NAME
  $dbpass = "twv_4rwZpa45";    // CHANGE IT TO YOUR DATABASE PASSWORD

echo "Set connection variables";

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to mysql");

echo "Connected";

  $dbname = "twv_runwme";     // CHANGE IT TO YOUR DATABASE NAME

  mysql_select_db($dbname);
?>
