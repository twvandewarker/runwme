<?php

  $user = isset($user) ? $user : $_POST["User"];
  $pass = isset($pass) ? $pass : $_POST["Pass"];

  if (!$user or !$pass) {

    echo '
    <html>
      <head>
        <title>Empty fields</title>
      </head>
      <body bgcolo="white" text="black">
        <p>Empty Field. Please try again. Redirecting you back.</p> 
        <meta http-equiv="refresh" content="3; url=index.php" />
      </body>
    </html>
    ';

  } else {

    include ("readDb.php");

    if ($found == 0) {

      echo '
      <html>
        <head>
          <title> Username does not exist </title>
        </head>
        <body bgcolor="white" text="black">
          <p>Username not found. Please try again. Redirecting you back.</p>
          <meta http-equiv="refresh" content="3; url=index.php" />
        </body>
      </html>
      ';

    } else {
      
      if ($pass != $passdB) {

        echo '
        <html>
          <head>
            <title>Incorrect Password</title>
          </head>
          <body bgcolor="white" text="black">
            <p>Wrong password. Please try again. Redirecting you back.</p>
            <meta http-equiv="refresh" content="3; url=index.php" />
          </body>
        </html>
        ';

      } else {

        echo '
          <html>
            <title> "The HandyRides - ' . $row[fName] . '\'s profile."</title>
          <body bgcolor="white" text="black">
            <center>
              <img src ="logo.jpg" />
              <br />
              <p>Hi ' . $row[fName] . ' welcome back! Here is your trip information:</p>
              <br />

            <table bgcolor="white" border="1" cellspacing="2" cellpadding="4" width="60%">
              <tr bgcolor="white">
                <th>First Name</th> 
                <th>Last Name</th> 
                <th>Origin</th>
                <th>Destination</th>
                <th>Departure Date</th>
                <th>Departure Time</th>
                <th>Has Car</th>
                <th>Available Seats</th>
              </tr>

              <tr>
                <td align=center> ' . $row["fName"] . '</td>
                <td align=center> ' . $row["lName"] . '</td>
                <td align=center> ' . $row["Origin"] . '</td>
                <td align=center> ' . $row["Destination"] . '</td>
                <td align=center> ' . $row["dDate"] . '</td>
                <td align=center> ' . $row["dTime"] . '</td>
                <td align=center> ' . $row["Hascar"] . '</td>
                <td align=center> ' . $row["Seats"] . '</td>
              </tr>
            </table>

            <br /><br />

            <h3>Update Trip</h3>
            <form name="new" action="updateTrip.php" method="post">
              <input type="hidden" name="user" value= ' . $user . ' />
              <label for="Origin">Origin:</label><input type="text" name="Origin" /><br />
              <label for="Destination">Destination:</label><input type="text" name="Destination" /><br />
              <label for="dDate">Departure Date:</label><input type="date" name="dDate" /><br />
              <label for="dTime">Departure Time:</label><input type="time" name="dTime" />

              <p>Do you have a car: <p>
              <input type="radio" name="Hascar" value="Yes" /> <label for="Hascar">Yes</label><br />
              <input type="radio" name="Hascar" value="No" /> <label for="Hascar">No</label>
              <p>If you have a car, how many seats can you offer:</p>
              <input type="number" name="Seats" />
              <input type="submit" value="Update" />
            </form>
            
            <br /><br />
            
            <form id="unsubscribe" action="deleteMember.php" method="post">
              <input type="hidden" name="user" value=' . $user . ' />
              <input type="submit" value="Unsubscribe">
            </form>
            
            <br />

            <a href="index.php"> Return to Homepage </a>

          </center>
        </body>
      </html>
      ';

      }
    }
  }

?>



