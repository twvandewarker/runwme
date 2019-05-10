<?php




  // See if we have an OK result
  if (!$result) {
    die("SQL Error Getting User Information: " . mysqli_error($conn));
    echo 'died';
  }
  else {
     
    include ("connectDb.php");
    $matches = array();
  	$found = number_format(mysqli_num_rows($user_result));
  	$urow = mysqli_fetch_array($user_result);
    
    if ($found) {

          $sqlt2 = "SELECT * FROM runwme_users";

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
                ($urow["run_walk_bike"] & $row["run_walk_bike"])){
                    array_push($matches, $row["username"]);
                }
                
            }
      
        }
        
    } 
    mysqli_close($conn); 
  }
    
  
?>