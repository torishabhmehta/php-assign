<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>complete-profile</title>
    <link rel="stylesheet" type="text/css" href="profile.css">
    </head>
    <body>
    <div id="a">
      <div id="cover">
          <div id="profile">
              </div>
                </div>
                </div>
                <div id="inform">
                <p><span>name</span><span><?php echo $_SESSION["name"]; ?></span></p>
                <p><span>number</span<span><?php echo $_SESSION["phno"]; ?></span></p>
                <p><span>email</span><span><?php echo $_SESSION["email"]; ?></span></p>
               
                </div>
                </body>
                </html>

