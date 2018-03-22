<?php 
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'On');

//variable naming
$username=$_SESSION["username"];

// mysql naming
$db_host="192.168.121.187";
$db_username="first_year";
$db_passwd="first_year";
$db_name="first_year_db";

// connection
$conn=new mysqli($db_host, $db_username, $db_passwd,$db_name ) or die(mysqli_error());

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$feed = $conn->real_escape_string($_POST["text"]);
$sql="INSERT INTO rishabh_feed VALUES ('$username', '$feed',NULL);";

echo $sql;

if($conn->query($sql)===TRUE){ 
  echo "successful";
  header('location: feed.php');
}
else
{
  die("something wrong");
}

?>

