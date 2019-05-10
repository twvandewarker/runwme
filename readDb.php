<?php

  // Connecting database
  include ("connectDb.php");

  $query = "SELECT * FROM runwme_users WHERE username = '$user'";

  // Perform query
  $result = mysqli_query($conn, $query);

  // See if we get an OK result
  if (!$result) {
      die("SQL Error Getting User Information: " . mysqli_error($conn));
  }
  else {
    
  	$found = number_format(mysqli_num_rows($result));
  	$row = mysqli_fetch_array($result);
  	$hash_returned = $row["password_hash"];    //find password hash
}

  mysqli_close($conn);

?>
