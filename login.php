<!DOCTYPE html>
<html>
    <head>
        <title>Password Verification</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>

    <body>

<?php
 // Check for cookies
  $user = isset($user) ? $user : $_POST["User"];
  $pass = isset($pass) ? $pass : $_POST["Pass"];


  if (!$user or !$pass) {

     echo '
     <p>Empty Field. Please try again. Redirecting you back.</p> 
        <meta http-equiv="refresh" content="3; url=login.html" />
        </body>
        </html>
     ';
  }

  else {
    echo "just before readDb";

    include ("readDb.php");

    echo $found;

    if ($found == 0) {

      echo '
          <p>Username not found. Please try again. Redirecting you back.</p>
          <meta http-equiv="refresh" content="3; url=login.html" />
          </body>
          </html>
      ';

    }
    else {
echo "about to test password <br />";
echo $hash_returned . "<br />";
      /*if (password_verify($pass, $hash_returned) {
        include("profile.php"); */
      }

      else {
        echo '
            <p>Wrong password. Please try again. Redirecting you back.</p>
            <meta http-equiv="refresh" content="3; url=login.html" />
            </body>
            </html>
        ';
      }
    }
  }

?>



