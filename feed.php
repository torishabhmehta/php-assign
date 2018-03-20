<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'On');
//connection variables
$db_host="192.168.121.187";
$db_user="first_year";
$db_pass="first_year";
$db="first_year_db";

//mysqli connection
$conn = new mysqli($db_host, $db_user, $db_pass,$db);

//check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html>
<head>
        <title>common feed</title>
        <style>
        p{
        background-color:cyan;
display:block;}
        body{
        background-color:magenta;}
        </style>

</head>
<body>
        <form action="post.php" method="post">
<textarea name='text'></textarea>
<input type="submit" name="submit">
</form>

<?php

//connection variables
$db_host="192.168.121.187";
$db_user="first_year";
$db_pass="first_year";
$db="first_year_db";

//mysqli connection
$conn = new mysqli($db_host, $db_user, $db_pass,$db);

//check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

$sql1 = "SELECT * FROM rishabh_feed;";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
            echo "<p> " . $row["feed"]. "<br>Commented by: ".$row["username"]." at ".$row["time"]." </p> ";
      }
  } else {
      echo "0 results";
  }

  ?>

</body>
</html>


