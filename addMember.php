<!DOCTYPE html>
<html>
  <head>
    <title>runw/me addmember</title>
  </head>
  
  <body>

<?php
  // variables from form
  $user = $_POST["User"];
  $pass = $_POST["Pass"];
  $name = $_POST["Name"];
  $mode = $_POST["Mode"];
  $avail = $_POST["Availability"];
  $xcoords = $_POST["XCoords"];
  $ycoords = $_POST["YCoords"];
  $bio = $_POST["Bio"];
  $info= $_POST["Contactinfo"];

echo "Started php, made variables from post";


  //get variables from readDB.php
  include ("readDb.php");

echo "Finished readDb.php";

     //add users now
     if ($found == 0) {
        // Hash password
        $hash = password_hash($pass, PASSWORD_DEFAULT);

        echo "Hashed password";

        include ("connectDb.php");

        $sql = "INSERT INTO runwme_users (username, real_name, password_hash, run_walk_bike, times_available, location_x, location_y, bio, contact_info) VALUES ('$user' ,'$name', '$hash', '$mode', '$avail', '$xcoords', '$ycoords', '$bio', '$info')";

        $result = mysqli_query($conn, $sql);

        if ($result==1) {
           // Send to login page in newly created user
           echo '
           <p>Account created, sending you to login page.</p>
           <meta http-equiv="refresh" content="3"; url="login.html" />
           ';
        }
        else {
          echo '
          <p>Error. Please Try Again.</p>
          ';
        }
               
        mysqli_close($conn);
        }
     else {
          echo '
          <p>Username already exists. Please log-in. Redirecting you home. </p>
          <meta http-equiv="refresh" content="3"; url="index.html" />
          ';
     }
?> 

</body>
</html>
