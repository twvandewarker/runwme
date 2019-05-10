<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" />
<?php

    $user = isset($user) ? $user : $_POST["User"];
    
    echo '
    <title> "runwme ' . $row["real_name"] . '"</title>   
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
    <p style="font-size:120%">Hi ' . $row["real_name"] . ', welcome back! Here is your profile:</p>
    <br />
    <div class="prof_box">
    <img src ="runman.png" align="center" style="height:20%"/>
    <p style="font-size:150%" align=center> ' . $row["real_name"] . '</p>
    <p style="font-size:80%" align=center> ' . $row["username"] . '</p>
    <p style="font-size:80%" align=center> ' . $row["location_x"] . ',  ' . $row["location_y"] . '</p>
    <p style="font-size:80%" align=center> ' . $row["contact_info"] . '</p>
    <p align=center> Bio: ' . $row["bio"] . '</p> 
    </div>
    <br />
    <br /><br />

    <h3>Update Profile</h3>

    <br /><br />

    <p> Want to leave runwme? Shoot us an email, and we\'ll take you off our database. </p>

    <br />
    </div>
    <a href="index.html" style="vertical-align: baseline;"> Return to Homepage </a>

    </center>
</body>
</html>
';

?>