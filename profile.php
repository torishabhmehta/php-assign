<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'On');
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
        <?php  echo '<img src="../images1/'.$_SESSION['cp'].'" height="100%" width="100%">'; ?>
        <div id="profile">
          <?php  echo '<img src="../images/'.$_SESSION['pp'].'" height="100%" width="100%">'; ?>
        </div>
    </div>
  </div>   
  <div id="inform">
    <p><span>name</span><span><?php echo $_SESSION["name"]; ?></span></p>      
    <p><span>number</span<span><?php echo $_SESSION["phno"]; ?></span> </p>    
    <p><span>email</span><span><?php echo $_SESSION["email"]; ?></span></p>
  </div>
  <div>
    <button id='a' onclick="feed();">Go To Feed Page</button>
  </div>
  <script type="text/javascript">
    function feed()
    {window.location="feed.php";}
  </script>
</body>
</html>


