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
        <meta http-equiv="refresh" content="3; url=index.html" />
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
          <meta http-equiv="refresh" content="3; url=index.html" />
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
        include("profile.php");
      }
    }
  }

?>



