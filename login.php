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

echo "posted entered user and pass:";
echo $user;
echo $pass;

/*
  if (!$user or !$pass) {

     echo '
     <p>Empty Field. Please try again. Redirecting you back.</p> 
        <meta http-equiv="refresh" content="3; url=login.html" />
        </body>
        </html>
     ';

  }
  else {
    include ("readDb.php");

    if ($found == 0) {

      echo '
          <p>Username not found. Please try again. Redirecting you back.</p>
          <meta http-equiv="refresh" content="3; url=index.html" />
          </body>
          </html>
      ';

  }
  else {
      if (!password_verify($pass, $hash_returned) {

        echo '
            <p>Wrong password. Please try again. Redirecting you back.</p>
            <meta http-equiv="refresh" content="3; url=login.html" />
            </body>
            </html>
        ';

      }
      else {
        include("profile.php");
      }
    }
  }
*/
?>



