<?php
echo '
          <html>
<head>
    <title> "runwme ' . $row["real_name"] . '"</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
    </head>
          <body>
          
              <img src ="logo.png" align="top" style="height:10%"/>
            <center>
              <br />
              <p>Hi ' . $row["real_name"] . ', welcome back! Here is your profile:</p>
              <br />

                <p style="font-size:120%" align=center> ' . $row["real_name"] . '</p>
                <p style="font-size:80%" align=center> ' . $row["username"] . '</p>
                <p style="font-size:80%" align=center> ' . $row["location_x"] . ',  ' . $row["location_y"] . '</p>
                <p style="font-size:80%" align=center> ' . $row["contact_info"] . '</p>
                <div class="bio_box"> <p align=center> ' . $row["bio"] . '</p> </div>

            <br /><br />

            <h3>Update Profile</h3>
            
            <br /><br />
            
            <p> Want to leave runwme? Shoot us an email, and we'll take you off our database. </p>
            
            <br />

            <a href="index.php" style="vertical-align: baseline;"> Return to Homepage </a>

          </center>
        </body>
      </html>
      ';

?>