<?php

// Connecting database
include ("connectDb.php");

echo '<p>Finished include</p>';

  $sqlt = "SELECT location_x, location_y, times_available, run_walk_bike FROM runwme_users WHERE username = '$user'";

echo "Finished setting sqlt\n";
/*
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

          $sqlt2 = "SELECT username, location_x, location_y, times_available, run_walk_bike FROM runwme_users";

        echo "Finished setting sqlt\n";

        // Again, Send the request
        $all_results = mysqli_query($conn, $sqlt2);
                  
        if (!$all_results) {
            die("SQL Error Getting User Information: " . mysqli_error($conn));
        }
        else {
            $found2 = number_format(mysqli_num_rows($all_results));
            while ($row = mysqli_fetch_array($all_results)){
                if (($urow["times_available"] & $row["times_available"]) &&
                ($urow["run_walk_bike"] & $row["run_walk_bike"]) &&
                ($locatonsmatch){
                    array_push($matches, $row["username"]);
                }
                
            }
      
        }
        
    }

  }
  */

  mysqli_close($conn);

?>