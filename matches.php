<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" />
<?php
$user = isset($user) ? $user : $_POST["User"];
include ("readDb.php");
echo '
<html>
<head>
    <title> "runwme ' . $row["real_name"] . ' matches"</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
   
    </head>
        <body>
            <ul class="menu">

            <li><form method="post" action="profile.php" class="inline">
          <button type="submit" name="User" value="'. $user .'" class="link-button">Profile</button></form></li>
            <li><form method="post" action="matches.php" class="inline">
          <button type="submit" name="User" value="'. $user .'" class="link-button">Matches</button></form></li>
            <li><form method="post" action="besties.php" class="inline">
          <button type="submit" name="User" value="'. $user .'" class="link-button">Buddies</button></form></li>
            <img src ="logo.png" />
            </ul>
          <div>
            <center>
              <br /> <br /> 
              <p style="font-size:120%">Hi ' . $row["real_name"] . ', welcome back! Here some potential friends to run with:</p>
              <br />
                <div class="tiles">
                ';
                
            //include("getMatches.php")
            /*
            if($found2) {
            foreach ($matches as &$id){
                $query = "SELECT username, real_name, location_x, location_y, times_available, run_walk_bike, bio FROM runwme_users WHERE username = '$id'";
                $result = mysqli_query($conn, $query);
                $row = mysql_fetch_assoc($result)
                echo '<div>
                <img src ="runman.png" align="center" style="height:20%"/>
                <p style="font-size:150%" align=center> ' . $row["real_name"] . '</p>
                <p style="font-size:80%" align=center> ' . $row["location_x"] . ',  ' . $row["location_y"] . '</p>
                <p align=center> Bio: ' . $row["bio"] . '</p> 
                <div>'
            }  */
            echo '
                </div>
<br />
            <br /><br />

            <br />
</div>
            <a href="index.html" style="vertical-align: baseline;"> Return to Homepage </a>

          </center>
        </body>
      </html>
      ';

?>