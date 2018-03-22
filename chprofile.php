<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'On');
// mysql naming
$db_host="192.168.121.187";
$db_username="first_year";
$db_passwd="first_year";
$db_name="first_year_db";

//mysqli connection
$conn = new mysqli($db_host, $db_username, $db_passwd,$db_name);

//check connection
if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
}

//enter query
$sql1= "select * from rishabh_bg where username='$username';";
$sql2= "select * from rishabh_profile where username='$username';";

//using query
$result1 = $conn->query($sql1);
if ($result1->num_rows == 1) {
    $row = $result1->fetch_assoc();
      $_SESSION["pp"] = $row["pn"];
        $_SESSION["cp"] = $row["cn"];
$_SESSION["ei"]=$row['ei'];
$_SESSION['work']=$row['work'];
    }

$result2 = $conn->query($sql2);
if ($result2->num_rows == 1) {
  $row = $result2->fetch_assoc();
  $_SESSION["name"] = $row["Name"];
  $_SESSION["email"] = $row["email"];
  $_SESSION["phno"] = $row["ph_no"];
  $_SESSION["age"] = $row["age"];
}


 ?>
<!DOCTYPE html>
<html>
<head>
  <title>complete profile</title>
  <style>
  body{
  background-color: peach;}
  fieldset{
background-color: pink;}
  </style>
  </head>
  <body>
  <form action='../update.php' method='post' enctype='multipart/form-data' >
   <fieldset>
     <legend>Update profile</legend>
      Select Profile picture: <input type='file' id='pp' name='pp'  ?>"><br>
      Select Cover picture: <input type='file' id='cp' name='cp' ><br>
      Educational Institute: <input type='text' name='ei' value="<?php echo $_SESSION["pp"]; ?>"  required=''><br>
      Working as: <input type='text' name='work'value="<?php echo $_SESSION["pp"]; ?>"  required=''><br>
      Name: <input type='text' name='name' value="<?php echo $_SESSION["pp"]; ?>"  required=''><br>
      Email:<input type='text' name='email' value="<?php echo $_SESSION["pp"]; ?>"  required=''><br>
      age: <input type='text' name='age' value="<?php echo $_SESSION["pp"]; ?>"  required=''><br>
      ph no: <input type='text' name='phno' value="<?php echo $_SESSION["phno"]; ?>"  required=''><br>
              <input type='submit' name='update profile'>
               </fieldset>
               </form>

               </body>
               </html>

