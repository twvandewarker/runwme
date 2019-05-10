<?php

// Connecting database
include ("connectDb.php");

echo "Finished include\n";

  $sqlt = "SELECT buddy_list WHERE username = '$user'";

echo "Finished setting sqlt\n";

  // Again, Send the request
  $user_result = mysqli_query($conn, $sqlt);

  // See if we get an OK result
  if (!$user_result) {
    die("SQL Error Getting User Information: " . mysqli_error($conn));
  }
  else {
    $matches = array();
  	$found = number_format(mysqli_num_rows($user_result));
  	$urow = mysqli_fetch_array($user_result);
    
    if ($found) {
        $stringbesties = $urow["buddy_list"];
        $besties = explode (",", $stringbesties);        
    }

  }

  mysqli_close($conn);

?>