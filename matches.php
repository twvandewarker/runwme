<?php
echo '
<html>
<head>
    <title> "runwme ' . $row["real_name"] . ' matches"</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
   
    </head>
        <body>
            <ul class="menu">
              
              <li><a href="profile.php">Profile</a></li>
              <li><a href="matches.php">Matches</a></li>
              <li><a href="besties.php">Besties</a></li>
              <img src ="logo.png" />
            </ul>
          <div>
            <center>
              <br /> <br /> 
              <p style="font-size:120%">Hi ' . $row["real_name"] . ', welcome back! Here some potential friends to run with:</p>
              <br />
                <div class="tiles">
                ';
                
            include("getMatches.php")
            while ($row = mysql_fetch_assoc($result)) {
                echo '<div>
                <img src ="runman.png" align="center" style="height:20%"/>
                <p style="font-size:150%" align=center> ' . $row["real_name"] . '</p>
                <p style="font-size:80%" align=center> ' . $row["username"] . '</p>
                <p style="font-size:80%" align=center> ' . $row["location_x"] . ',  ' . $row["location_y"] . '</p>
                <p style="font-size:80%" align=center> ' . $row["contact_info"] . '</p>
                <p align=center> Bio: ' . $row["bio"] . '</p> 
                <div>'
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