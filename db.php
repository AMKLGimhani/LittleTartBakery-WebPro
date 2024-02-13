<?php
$servername = "php24-db-1";
$username = "littleTart";
$password = "Kalpi@1113";
$dbname = "littleTart";

$conn = new mysqli($servername,$username,$password,$dbname);
 

if($conn->connect_error)
{
  die("Connection Failed:" . $conn->connect_error);
}

?>