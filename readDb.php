<?php

  // Connecting database
  include ("connectDb.php");

  $sqlt = "SELECT * FROM runwme_users WHERE username = '$user'";

echo $sqlt;

  // Again, Send the request
  $result = mysql_query($sqlt);

echo $result;

  // See if we get an OK result
  if (!$result) {
    die("SQL Error Getting User Information: " . mysql_error($conn));
  }
  else {
  	$found = number_format(mysql_num_rows($result));
  	$row = mysql_fetch_array($result);
  	$hash_returned = $row["password_hash"];    //find password hash
  }

  mysql_close($conn);

?>
