<?php

echo '
<html>
  <head>
    <title>Member Registration</title>
  </head>
  
  <body>
';

  //get variables
  $user = $_POST["User"];
  $pass = $_POST["Pass"];
  $name = $_POST["Name"];
  $mode = $_POST["Mode"];
  $avail = $_POST["Availability"];
  $city = $_POST["City"];
  $state = $_POST["State"];
  $bio = $_POST["Bio"];
  $info= $_POST["Contactinfo"];

  //get variables from readDB.php
  include ("readDb.php");

  //add users now
  if ($found == 0) {

    if ($user && $pass && $name && $info){
		
		// hash code here

      include ("connectDb.php");

      $sql = "INSERT INTO runwme_users (username, real_name, password_hash, password_salt, run_walk_bike, times_available, location_x, location_y, bio, contact_info) VALUES ('$user' ,'$name', '$pass', '$pass','$mode', '$avail', '$city', '$state', '$bio', '$info')";

      $result = mysqli_query($conn, $sql);

      if ($result==1) {
        // login the user if just created
        include("login.php");
      } else {
 			  echo '
          <font color="#FF0000"><b><i> Error. Please Try Again.</b></i></font>
        ';
      }
               
      mysqli_close($conn);
    	
    } else {
      echo '
    		<p>You didn\'t include all the information. Please Try Again. Redirecting you to Registration. <p/>
        <meta http-equiv="refresh" content="3; URL=newMember.html">
      ';
    }

  } else {
    echo '
      <p>Username already exists. Please log-in. Redirecting you home <p/>
      <meta http-equiv="refresh" content="3; url=isindexSearch.php" />
    ';
  }

?>