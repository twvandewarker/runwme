<?php




  // See if we have an OK result
  if (!$result) {
    die("SQL Error Getting User Information: " . mysqli_error($conn));
    echo 'died';
  }
  else {
     
    include ("connectDb.php");
    $matches = array();
    
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
            while ($arow = mysqli_fetch_array($all_results)){
                echo $arow["username"];
                if (($row["times_available"] & $arow["times_available"]) and
                ($row["run_walk_bike"] & $arow["run_walk_bike"])){
                    array_push($matches, $arow["username"]);
                    echo 'new match founbd';
                }
                
            }
      
        }
        
    } 
    mysqli_close($conn); 
  }
    
  
?>