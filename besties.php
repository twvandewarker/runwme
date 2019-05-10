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
              <p style="font-size:120%">Hi ' . $row["real_name"] . ', welcome back! Here your besties!</p>
              <br />
                <div class="tiles">
                ';
             
            include("getBesties.php"); 
            if($found) {
            include ("connectDb.php");
               
            foreach ($besties as &$id){
                $query2 = "SELECT * FROM runwme_users WHERE username = '$id'";
                $newresult = mysqli_query($conn, $query2);
                $newrow = mysqli_fetch_array($newresult); 
                echo '<div>
                <img src ="runman.png" align="center" style="height:20%"/>
                <p style="font-size:150%" align=center> ' . $newrow["real_name"] . '</p>
                <p style="font-size:80%" align=center> ' . $newrow["location_x"] . ',  ' . $newrow["location_y"] . '</p>
                <p align=center> Bio: ' . $newrow["bio"] . '</p> 
                <p align=center>' . $newrow["contact_info"] . '</p> 
                <div>';
                }
            
            mysqli_close($conn); 
            }
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