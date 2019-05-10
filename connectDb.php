<?php

  // Connect to the database
  $dbhost = "localhost";
  $dbuser = "twv_travis";
  $dbpass = "twv_4rwZpa45";
  $dbname = "twv_runwme";

  $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to mysql");

  mysql_select_db($dbname);
?>
