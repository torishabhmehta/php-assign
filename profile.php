<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>

<!DOCTYPE html>
<html>
<head>
  <title>profile</title>
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
  <?php
   echo " <p>Name: ".$_SESSION["name"]."</p>";
  echo  "<p>Number: ".$_SESSION["phno"]."</p>";
  echo "<p>email: ".$_SESSION["email"]."</p>";?>
  </div>
 <div id="ab"> 
    <button onclick="feed();">Go To Feed Page</button>
    <button onclick="change();">change details</button>
    <button onclick="logout();">logout</button>
   </div> 
  <script type="text/javascript">
    function feed()
    {window.location="feed.php";}
    function logout(){
      window.location="logout.php";}
    function change(){
    window.location="chprofile.php";}
  </script>
</body>
</html>


