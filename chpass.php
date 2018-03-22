<?php
//start session
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'On');
//variable declaration
$username=$_SESSION['username'];
$ipass=md5($_POST["ipass"]);
$npass=md5($_POST["npass"]);
$cpass=md5($_POST["cpass"]);

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

//enter query
$sql= "select * from rishabh_profile where username='$username' and password='$ipass';";

//using query 
$result = $conn->query($sql);
if ($result->num_rows == 1) {
   $sql= "update rishabh_profile set password='$npass' where username='$username';";
    $conn->query($sql);
    header("location: ../display.php");
} else {
          echo "NOT OK";
}
?>
