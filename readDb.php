<?php

  // Connecting database
  include ("connectDb.php");

  // Here is another way of making an SQL query.
  $sqlt = "SELECT * FROM ridewme_users WHERE username = '$username'";

  // Again, Send the request
  $result = mysqli_query($conn, $sqlt);

  // See if we get an OK result
  if (!$result) {
    die("SQL Error Getting User Information: " . mysqli_error($conn));
  }
  else {
  	$found = number_format(mysqli_num_rows($result));
  	$row = mysqli_fetch_array($result);
  	$hash = $row["password_hash"];    //find password
  }

  mysqli_close($conn);

?>
